<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Hey Text</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://atugatran.github.io/FontAwesome6Pro/css/all.min.css">
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
    @yield('styles')
</head>

<body class="font-sans antialiased bg-white dark:bg-neutral-900 text-black dark:text-white h-screen max-h-screen">
    <div class="flex h-full">
        @include('component.sidebar')
        <div id="main" class="flex-grow max-h-screen overflow-y-auto">
            {{-- Header --}}
            <header class="px-[60px] flex flex-col sticky top-0 bg-white">
                <div id="header_main" class="flex h-[88px] items-center justify-between gap-5">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="" srcset="" class="h-[40px]">
                    </a>
                    <div class="flex-grow flex items-center bg-[#f3f6fc] h-[56px] rounded-full px-5 gap-5">
                        <i class="fa-regular fa-magnifying-glass"></i>
                        <input class="bg-transparent flex-grow focus-visible:outline-0" placeholder="Search fonts"
                            onclick="my_modal_2.showModal()">
                        <dialog id="my_modal_2" class="modal">
                            <div class="modal-box p-3 max-w-3xl w-full">
                                <div class="ais-InstantSearch">
                                    <div id="searchbox"></div>
                                    <div id="hits"></div>
                                </div>
                            </div>
                            <form method="dialog" class="modal-backdrop">
                                <button>close</button>
                            </form>
                        </dialog>
                    </div>
                </div>
                @yield('header')
            </header>
            <div class="px-[60px]">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('scripts')
    <script>
        window.risposeWidgetId = "awe4agwqgr62"
    </script>
    <script defer src="https://rispose.com/cdn/script.js"></script>
</body>

</html>
