@extends('layouts.home')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row">
                <div class="p-3 mt-3 p-md-5 row mt-md-0">
                    <div class="logo">
                        <img src="{{ asset('assets/media/logos/default.svg') }}" alt="" style="height: 40px;"
                            class="float-start">
                    </div>
                    <h1 class="mt-3 lh-lg fw-normal">{{ __('Home Description') }}</h1>
                </div>
                <div class="py-3 rounded text-input row">
                    <h1 class="fw-normal fs-1">
                        {{ __('Styles') }}
                    </h1>
                    <div class="col-12 col-md-8">
                        <div class="input-group input-group-lg">
                            <div class="form-floating">
                                <input type="text" class="form-control fs-2"
                                    placeholder="{{ __('Type hear to preview text') }}" id="input-text" />
                                <label for="input-text">{{ __('Type hear to preview text') }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!--begin::Slider-->
                        <div class="gap-3 d-flex justify-content-center align-items-center h-100">
                            <div class="fs-2">
                                <span class="fw-bold" id="px-val"></span>
                                px
                            </div>
                            <div id="px-slider" class="noUi-sm flex-grow-1"></div>
                        </div>
                        <!--end::Slider-->
                    </div>
                </div>
                <div class="py-5">
                    <div class="overflow-x-hidden table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 gy-7">
                            <thead>
                                <tr class="text-gray-800 fw-bold fs-6">
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (cache('sidebarData')['styles'] as $style)
                                    <tr>
                                        <td class="py-3 text-left">
                                            <div class="d-flex justify-content-between">
                                                <span>{{ $style->short_title }}</span>
                                                <span class="badge badge-warning" onclick="copyToCl(this)">
                                                    {{ __('Copy') }}
                                                </span>
                                            </div>
                                            <span class="preview" data-code="{{ $style->variant_code }}"
                                                data-title="{{ $style->short_title }}"
                                                style="font-size: 40px;"></span>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('styles')
    <style>
        .noUi-connects {
            background-color: var(--bs-primary);
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/toUnicodeVariant.min.js') }}"></script>
    <script>
        function convertText(val) {
            let previews = $(".preview");
            previews.each(function(index, element) {
                let code = $(this).data('code');
                let text = $('#input-text').val() == "" ? "{{ __('Type hear to preview text') }}" : $('#input-text').val();
                let result = toUnicodeVariant(text, code);
                $(this).css('font-size', val + 'px');
                $(this).html(result);
            })
        }

        var budgetSlider = document.querySelector("#px-slider");
        var budgetValue = document.querySelector("#px-val");
        noUiSlider.create(budgetSlider, {
            start: [40],
            connect: true,
            range: {
                "min": 12,
                "max": 200
            }
        });
        budgetSlider.noUiSlider.on("update", function(values, handle) {
            let val = Math.round(values[handle]);
            budgetValue.innerHTML = Math.round(values[handle]);
            if (handle) {
                val = Math.round(values[handle]);
                budgetValue.innerHTML = val;
            }
            convertText(val);
        });

        let input = $('#input-text');

        input.on("input", function(event) {
            let val = Math.round(budgetSlider.noUiSlider.get());
            convertText(val);
        });

        function copyToCl(element) {
            // Find the text field
            var copyText = $(element).parent().parent().find('.preview');
            // Select the text field
            copyText.select();
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.text());
            // Save data to local storage
            let datas = localStorage.getItem('copied_data');
            let data = {
                title: copyText.data('title'),
                text: copyText.text(),
                time: new Date().toLocaleString()
            }
            if (datas) {
                datas = JSON.parse(datas);
                datas.push(data);
            } else {
                datas = [data];
            }
            localStorage.setItem('copied_data', JSON.stringify(datas));
            // Alert the copied text
            toastr.info('{{ __('Copied') }}!');
        }
    </script>
@endsection
