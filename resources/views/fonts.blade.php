@extends('layout')

@section('title', $font->name)

@section('content')
    <div class="flex justify-between items-center mb-5">
        <div class="flex">
            <button
                class="rounded-full px-[16px] bg-[#e8f0fe] text-[16px] h-[48px] text-[#174ea6] font-medium flex justify-center items-center gap-1">
                <i class="fa-light fa-square-a font-medium text-[20px]"></i>
                Specimen
            </button>
        </div>
        <a href="{{ asset($font->url ) }}"
            class="rounded-full px-[16px] bg-[#1a73e8] text-[16px] h-[48px] text-white font-medium flex justify-center items-center gap-1">
            Download this font
        </a>
    </div>
    <div class="flex flex-col">
        <h1 class="text-[56px]">
            {{ $font->name }}
        </h1>
        <p class="text-[#5f6368]">
            Designed by <span class="text-[#1a73e8]">{{ $font->author }}</span>
        </p>
        <h1 class="text-[57px] text-center my-[48px] {{ $font->slug }}">
            {{ $testText }}
        </h1>
        <h2 class="text-[32px]">
            Styles
        </h2>
        <div class="flex h-[56px] my-[40px] justify-between items-center">
            <input type="text" placeholder="Type here"
                class="input input-bordered w-full h-full rounded-full px-[36px] flex-grow" id="text_input" />
            <div class="flex w-full max-w-[400px] items-center">
                <select class="select text-[16px]" id="size_input">
                    @foreach ($fontSizes as $size)
                        <option value="{{ $size }}" {{ $size == '48px' ? 'selected' : '' }}>{{ $size }}
                        </option>
                    @endforeach
                </select>
                <input type="range" min="8" max="280" value="48" class="range" id="range_input" />
            </div>
        </div>
        <div class="grid grid-cols-1 mt-3">
            @foreach ($fontWeight as $key => $w)
                <div class="record border-b hover:border-b-0">
                    <div class="flex flex-col p-5 rounded-xl hover:bg-[#ededed]">
                        <div class="flex items-center gap-3 text-[14px] font-normal leading-5 mb-6">
                            <h1 class="align-middle text-[16px] font-medium leading-6 m-0">
                                {{ $key }}
                            </h1>
                        </div>
                        <div class="font_temp flex justify-start items-center max-w-full overflow-hidden text-nowrap {{ $font->slug }}"
                            style="font-weight: {{ $w[0] }}; font-style: {{ $w[1] }}; font-size: 48px;">
                            <span>
                                {{ $testText }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('header')
@endsection

@section('styles')
    <style>
        @font-face {
            font-family: {{ $font->name }};
            src: url('/{{ $font->url }}') format('{{ $font->format }}');
        }

        .{{ $font->slug }} {
            font-family: {{ $font->name }}, serif;
        }
    </style>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/fonts.js') }}" type="module"></script>
@endsection
