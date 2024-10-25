@extends('layout')

@section('title', 'Unicode Character')

@section('content')
    <div class="flex justify-between items-center mb-5">
        <div class="flex gap-3">
            <button
                class="rounded-full px-[16px] bg-[#e8f0fe] text-[16px] h-[48px] text-[#174ea6] font-medium flex justify-center items-center gap-1">
                <i class="fa-light fa-square-a font-medium text-[20px]"></i>
                Specimen
            </button>
            <button
                class="rounded-full px-[16px] text-[16px] h-[48px] text-[#202124] font-medium flex justify-center items-center gap-1">
                <i class="fa-sharp fa-light fa-pen-swirl font-medium text-[20px]"></i>
                Variant
            </button>
        </div>
    </div>
    <div class="flex flex-col">
        <h1 class="text-[56px]">
            Unicode Character Generator
        </h1>
        <p class="text-[#5f6368]">
            Designed by <span class="text-[#1a73e8]">Hey Text</span>
        </p>
        <h1 class="text-[57px] text-center my-[48px]">
            Ⓖⓔⓝⓔⓡⓐⓣⓔ ⓤⓝⓘⓒⓞⓓⓔ ⓒⓗⓐⓡⓐⓒⓣⓔⓡ
        </h1>
        <h2 class="text-[32px]">
            Preview
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
            Input text to preview
        </div>
    </div>
@endsection

@section('header')
@endsection

@section('styles')
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/unicodes.js') }}" type="module"></script>
@endsection
