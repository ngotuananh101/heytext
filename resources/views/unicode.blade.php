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
            <button onclick="variant.showModal()"
                class="rounded-full px-[16px] text-[16px] h-[48px] text-[#202124] font-medium flex justify-center items-center gap-1">
                <i class="fa-sharp fa-light fa-pen-swirl font-medium text-[20px]"></i>
                Variant
            </button>
            <dialog id="variant" class="modal">
                <div class="modal-box max-w-3xl w-full">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Variant</th>
                                <th>Alias</th>
                                <th>Description</th>
                                <th>Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>monospace</td>
                                <td>m</td>
                                <td>Monospace</td>
                                <td>𝚖𝚘𝚗𝚘𝚜𝚙𝚊𝚌𝚎</td>
                            </tr>
                            <tr>
                                <td>bold</td>
                                <td>b</td>
                                <td>Bold text</td>
                                <td>𝐛𝐨𝐥𝐝</td>
                            </tr>
                            <tr>
                                <td>italic</td>
                                <td>i</td>
                                <td>Italic text</td>
                                <td>𝑖𝑡𝑎𝑙𝑖𝑐</td>
                            </tr>
                            <tr>
                                <td>bold italic</td>
                                <td>bi</td>
                                <td>bold+italic text</td>
                                <td>𝒃𝒐𝒍𝒅 𝒊𝒕𝒂𝒍𝒊𝒄</td>
                            </tr>
                            <tr>
                                <td>script</td>
                                <td>c</td>
                                <td>Handwriting style</td>
                                <td>𝓈𝒸𝓇𝒾𝓅𝓉</td>
                            </tr>
                            <tr>
                                <td>bold script</td>
                                <td>bc</td>
                                <td>Bolder handwriting</td>
                                <td>𝓫𝓸𝓵𝓭 𝓼𝓬𝓻𝓲𝓹𝓽</td>
                            </tr>
                            <tr>
                                <td>gothic</td>
                                <td>g</td>
                                <td>Gothic (fraktur)</td>
                                <td>𝔤𝔬𝔱𝔥𝔦𝔠</td>
                            </tr>
                            <tr>
                                <td>gothic bold</td>
                                <td>bg</td>
                                <td>Gothic in bold</td>
                                <td>𝖌𝖔𝖙𝖍𝖎𝖈 𝖇𝖔𝖑𝖉</td>
                            </tr>
                            <tr>
                                <td>doublestruck</td>
                                <td>d</td>
                                <td>Outlined text</td>
                                <td>𝕕𝕠𝕦𝕓𝕝𝕖𝕤𝕥𝕣𝕦𝕔𝕜</td>
                            </tr>
                            <tr>
                                <td>𝗌𝖺𝗇𝗌</td>
                                <td>s</td>
                                <td>Sans-serif style</td>
                                <td>𝗌𝖺𝗇𝗌</td>
                            </tr>
                            <tr>
                                <td>bold 𝗌𝖺𝗇𝗌</td>
                                <td>bs</td>
                                <td>Bold sans-serif</td>
                                <td>𝗯𝗼𝗹𝗱 𝘀𝗮𝗻𝘀</td>
                            </tr>
                            <tr>
                                <td>italic 𝗌𝖺𝗇𝗌</td>
                                <td>is</td>
                                <td>Italic sans-serif</td>
                                <td>𝘪𝘵𝘢𝘭𝘪𝘤 𝘴𝘢𝘯𝘴</td>
                            </tr>
                            <tr>
                                <td>bold italic sans</td>
                                <td>bis</td>
                                <td>Bold italic sans-serif</td>
                                <td>𝙗𝙤𝙡𝙙 𝙞𝙩𝙖𝙡𝙞𝙘 𝙨𝙖𝙣𝙨</td>
                            </tr>
                            <tr>
                                <td>circled</td>
                                <td>o</td>
                                <td>Letters within circles</td>
                                <td>ⓒⓘⓡⓒⓛⓔⓓ</td>
                            </tr>
                            <tr>
                                <td>circled negative</td>
                                <td>on</td>
                                <td>-- negative</td>
                                <td>🅒🅘🅡🅒🅛🅔🅓</td>
                            </tr>
                            <tr>
                                <td>squared</td>
                                <td>q</td>
                                <td>Letters within squares</td>
                                <td>🅂🅀🅄🄰🅁🄴🄳</td>
                            </tr>
                            <tr>
                                <td>squared negative</td>
                                <td>qn</td>
                                <td>-- negative</td>
                                <td>🆂🆀🆄🅰🆁🅴🅳</td>
                            </tr>
                            <tr>
                                <td>paranthesis</td>
                                <td>p</td>
                                <td>Letters within paranthesis</td>
                                <td>⒫⒜⒭⒠⒩⒯⒣⒠⒮⒤⒮</td>
                            </tr>
                            <tr>
                                <td>fullwidth</td>
                                <td>w</td>
                                <td>Wider monospace font</td>
                                <td>ｆｕｌｌｗｉｄｔｈ</td>
                            </tr>
                            <tr>
                                <td>flags</td>
                                <td>f</td>
                                <td>Regional codes</td>
                                <td>🇩🇰 🇺 🇳 🇮 🇨 🇴 🇩 🇪</td>
                            </tr>
                            <tr>
                                <td>numbers dot</td>
                                <td>nd</td>
                                <td>Numbers with trailing dot</td>
                                <td>⒈⒉⒊⒋</td>
                            </tr>
                            <tr>
                                <td>numbers comma</td>
                                <td>nc</td>
                                <td>Numbers with trailing comma</td>
                                <td>🄂🄃🄄🄅</td>
                            </tr>
                            <tr>
                                <td>number double circled</td>
                                <td>ndc</td>
                                <td>Numbers within double circle</td>
                                <td>⓵⓶⓷⓸</td>
                            </tr>
                            <tr>
                                <td>roman</td>
                                <td>r</td>
                                <td>Roman numerals</td>
                                <td>Ⅰ, Ⅱ, ⅯⅯⅩⅩⅢ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
            <button onclick="combining.showModal()"
                class="rounded-full px-[16px] text-[16px] h-[48px] text-[#202124] font-medium flex justify-center items-center gap-1">
                <i class="fa-sharp-duotone fa-solid fa-merge font-medium text-[20px]"></i>
                Combining
            </button>
            <dialog id="combining" class="modal">
                <div class="modal-box max-w-3xl w-full">
                    <table class="table text-left">
                        <thead>
                            <tr>
                                <th>Combining</th>
                                <th>Short</th>
                                <th>Sample (italic variant)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>strike</td>
                                <td>s</td>
                                <td>𝑎̶𝑏̶𝑐̶𝑑̶𝑒̶𝑓̶</td>
                            </tr>
                            <tr>
                                <td>strike-curly</td>
                                <td>sc</td>
                                <td>𝑎̴𝑏̴𝑐̴𝑑̴𝑒̴𝑓̴</td>
                            </tr>
                            <tr>
                                <td>underline</td>
                                <td>u</td>
                                <td>𝑎̲𝑏̲𝑐̲𝑑̲𝑒̲𝑓̲</td>
                            </tr>
                            <tr>
                                <td>underline-curly</td>
                                <td>uc</td>
                                <td>𝑎̰𝑏̰𝑐̰𝑑̰𝑒̰𝑓̰</td>
                            </tr>
                            <tr>
                                <td>underline-sm</td>
                                <td>u-sm</td>
                                <td>𝑎̠𝑏̠𝑐̠𝑑̠𝑒̠𝑓̠</td>
                            </tr>
                            <tr>
                                <td>underline-double</td>
                                <td>ud</td>
                                <td>𝑎̳𝑏̳𝑐̳𝑑̳𝑒̳𝑓̳</td>
                            </tr>
                            <tr>
                                <td>underline-double-sm</td>
                                <td>ud-sm</td>
                                <td>𝑎͇𝑏͇𝑐͇𝑑͇𝑒͇𝑓͇</td>
                            </tr>
                            <tr>
                                <td>overline</td>
                                <td>o</td>
                                <td>𝑎̅𝑏̅𝑐̅𝑑̅𝑒̅𝑓̅</td>
                            </tr>
                            <tr>
                                <td>overline-curly</td>
                                <td>oc</td>
                                <td>𝑎̃𝑏̃𝑐̃𝑑̃𝑒̃𝑓̃</td>
                            </tr>
                            <tr>
                                <td>overline-sm</td>
                                <td>o-sm</td>
                                <td>𝑎̄𝑏̄𝑐̄𝑑̄𝑒̄𝑓̄</td>
                            </tr>
                            <tr>
                                <td>overline-double</td>
                                <td>od</td>
                                <td>𝑎̿𝑏̿𝑐̿𝑑̿𝑒̿𝑓̿</td>
                            </tr>
                            <tr>
                                <td>slash</td>
                                <td>sl</td>
                                <td>𝑎̸𝑏̸𝑐̸𝑑̸𝑒̸𝑓̸</td>
                            </tr>
                            <tr>
                                <td>cross-above</td>
                                <td>ca</td>
                                <td>𝑎̽𝑏̽𝑐̽𝑑̽𝑒̽𝑓̽</td>
                            </tr>
                            <tr>
                                <td>plus-below</td>
                                <td>pb</td>
                                <td>𝑎̟𝑏̟𝑐̟𝑑̟𝑒̟𝑓̟</td>
                            </tr>
                            <tr>
                                <td>enclose-circle</td>
                                <td>en-c</td>
                                <td>𝑎⃝ 𝑏⃝ 𝑐⃝ </td>
                            </tr>
                            <tr>
                                <td>enclose-circle-backslash</td>
                                <td>en-cb</td>
                                <td>𝑎⃠ 𝑏⃠ 𝑐⃠ </td>
                            </tr>
                            <tr>
                                <td>enclose-square</td>
                                <td>en-s</td>
                                <td>𝑎⃞ 𝑏⃞ 𝑐⃞ </td>
                            </tr>
                            <tr>
                                <td>enclose-diamond</td>
                                <td>en-d</td>
                                <td>𝑎⃟ 𝑏⃟ 𝑐⃟ </td>
                            </tr>
                            <tr>
                                <td>enclose-screen</td>
                                <td>en-scr</td>
                                <td>𝑎⃢ 𝑏⃢ 𝑐⃢ </td>
                            </tr>
                            <tr>
                                <td>enclose-keycap</td>
                                <td>en-k</td>
                                <td>𝑎⃣ 𝑏⃣ 𝑐⃣ </td>
                            </tr>
                            <tr>
                                <td>halo-breve</td>
                                <td>hb</td>
                                <td>𝖺҈ 𝖻҈ 𝖼҈ </td>
                            </tr>
                            <tr>
                                <td>halo-grave</td>
                                <td>hg</td>
                                <td>𝖺҉ 𝖻҉ 𝖼҉ </td>
                            </tr>
                            <tr>
                                <td>𝑛-above</td>
                                <td>{a..x}-a</td>
                                <td>𝑎ͣ𝑎ͨ𝑎ͩ𝑎ͤ𝑎ͪ𝑎ͥ𝑎ͫ𝑎ͦ𝑎ͬ𝑎ͧ𝑎ͮ𝑎ͯ</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form method="dialog" class="modal-backdrop">
                    <button>close</button>
                </form>
            </dialog>
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
        <div class="flex h-[56px] mt-[40px] justify-between items-center">
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
        <div class="flex h-[56px] mb-[40px] mt-[10px] justify-center items-center gap-3">
            <span class="text-nowrap">
                Select style:
            </span>
            <select class="select select-bordered w-full max-w-xs rounded-full" id="variantSelect">
                <option selected>Select variant</option>
            </select>
            <select class="select select-bordered w-full max-w-xs rounded-full" id="combiningSelect">
                <option selected>Select combining</option>
            </select>
        </div>
        <div class="grid grid-cols-1 mt-3">
            <div class="flex flex-col p-5 rounded-xl hover:bg-[#ededed]">
                <div class="font_temp flex justify-start items-center max-w-full" style="font-size: 48px;">
                    <span>
                        This is preview text
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('header')
@endsection

@section('styles')
@endsection

@section('scripts')
    <script type="module">
        const variants = {!! $variant !!};
        const combinings = {!! $combining !!};

        let variantSelect = $('#variantSelect');
        let combiningSelect = $('#combiningSelect');

        for (let index = 0; index < variants.length; index++) {
            const element = variants[index];
            variantSelect.append(`<option value="${element.Alias}">${element.Variant}</option>`);
        }

        for (let index = 0; index < combinings.length; index++) {
            const element = combinings[index];
            combiningSelect.append(`<option value="${element.Short}">${element.Combining}</option>`);
        }

        variantSelect.on('change', showStyle);
        combiningSelect.on('change', showStyle);

        function showStyle() {
            var text = $('#text_input').val() == "" ? "This is preview text" : $('#text_input').val();
            var variant = $('#variantSelect').val() == "" ? "sans" : $('#variantSelect').val();
            var combining = $('#combiningSelect').val();
            var font_temp = $('.font_temp');
            for (let index = 0; index < font_temp.length; index++) {
                const element = font_temp[index];
                $(element).text(toUnicodeVariant(text, variant, combining));
            }
        }
    </script>
    <script src="{{ asset('assets/js/unicodes.js') }}" type="module"></script>
@endsection
