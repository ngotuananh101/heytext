@extends('layout')

@section('title', __('Fonts'))

@section('content')
    <div class="flex justify-between items-center">
        <span class="text-[#5f6368] text-sm">
            {{ __('Showing') }} {{ $fonts->firstItem() }} - {{ $fonts->lastItem() }} {{ __('of') }}
            {{ $fonts->total() }} {{ __('families') }}
        </span>
        <div class="text-[#5f6368] flex justify-center items-center">
            <span class="text-[#5f6368] text-base">
                {{ __('About these result') }}
            </span>
            <i class="fa-regular fa-circle-info text-lg ms-2"></i>
            <div class="flex border border-solid rounded-md text-[20px] ml-5">
                <button class="m-1 h-fit leading-none" id="btn_grid">
                    <i class="fa-regular fa-table-cells"></i>
                </button>
                <div class="min-h-full w-[1px] bg-[#e5e7eb]"></div>
                <button class="m-1 h-fit leading-none text-[#1a73e8] dark:text-[#8ab4f8]" id="btn_list">
                    <i class="fa-solid fa-table-list"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 mt-3" id="font-grid">
        @foreach ($fonts as $font)
            <a class="record border-b hover:border-b-0" href="{{ route('fonts', $font->slug) }}">
                <div class="flex flex-col p-5 rounded-xl hover:bg-[#ededed]">
                    <div class="flex items-center gap-3 text-[14px] font-normal leading-5 mb-6">
                        <h1 class="align-middle text-[16px] font-medium leading-6 m-0 font-name">
                            {{ $font->name }}
                        </h1>
                        <span class="align-middle text-[#5f6368] dark:text-[#9aa0a6] font-fotmat">
                            {{ $font->format }}
                        </span>
                        <span class="text-[#5f6368] dark:text-[#9aa0a6]">|</span>
                        <span class="align-middle text-[#5f6368] dark:text-[#9aa0a6] font-author">
                            {{ $font->author }}
                        </span>
                    </div>
                    <div class="font_temp text-4xl max-w-full overflow-hidden text-nowrap font-preview"
                        style="font-family: {{ $font->name }}, serif;">
                        {{ $font->demo_text }}
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection

@section('styles')
    <style>
        @foreach ($fonts as $font)
            @font-face {
                font-family: {{ $font->name }};
                src: url('{{ $font->url }}') format('{{ $font->format }}');
            }
        @endforeach
    </style>
@endsection

@section('scripts')
    <script type="module">
        window.nextPage = "{{ $fonts->nextPageUrl() }}";
    </script>
    <script src="{{ asset('assets/js/home.js') }}" type="module"></script>
@endsection
