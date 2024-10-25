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
                                <th align="left">Variant</th>
                                <th align="center">Alias</th>
                                <th align="left">Description</th>
                                <th align="left">Example</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td align="left">monospace</td>
                                <td align="center">m</td>
                                <td align="left">Monospace</td>
                                <td align="left">𝚖𝚘𝚗𝚘𝚜𝚙𝚊𝚌𝚎</td>
                            </tr>
                            <tr>
                                <td align="left">bold</td>
                                <td align="center">b</td>
                                <td align="left">Bold text</td>
                                <td align="left">𝐛𝐨𝐥𝐝</td>
                            </tr>
                            <tr>
                                <td align="left">italic</td>
                                <td align="center">i</td>
                                <td align="left">Italic text</td>
                                <td align="left">𝑖𝑡𝑎𝑙𝑖𝑐</td>
                            </tr>
                            <tr>
                                <td align="left">bold italic</td>
                                <td align="center">bi</td>
                                <td align="left">bold+italic text</td>
                                <td align="left">𝒃𝒐𝒍𝒅 𝒊𝒕𝒂𝒍𝒊𝒄</td>
                            </tr>
                            <tr>
                                <td align="left">script</td>
                                <td align="center">c</td>
                                <td align="left">Handwriting style</td>
                                <td align="left">𝓈𝒸𝓇𝒾𝓅𝓉</td>
                            </tr>
                            <tr>
                                <td align="left">bold script</td>
                                <td align="center">bc</td>
                                <td align="left">Bolder handwriting</td>
                                <td align="left">𝓫𝓸𝓵𝓭 𝓼𝓬𝓻𝓲𝓹𝓽</td>
                            </tr>
                            <tr>
                                <td align="left">gothic</td>
                                <td align="center">g</td>
                                <td align="left">Gothic (fraktur)</td>
                                <td align="left">𝔤𝔬𝔱𝔥𝔦𝔠</td>
                            </tr>
                            <tr>
                                <td align="left">gothic bold</td>
                                <td align="center">bg</td>
                                <td align="left">Gothic in bold</td>
                                <td align="left">𝖌𝖔𝖙𝖍𝖎𝖈 𝖇𝖔𝖑𝖉</td>
                            </tr>
                            <tr>
                                <td align="left">doublestruck</td>
                                <td align="center">d</td>
                                <td align="left">Outlined text</td>
                                <td align="left">𝕕𝕠𝕦𝕓𝕝𝕖𝕤𝕥𝕣𝕦𝕔𝕜</td>
                            </tr>
                            <tr>
                                <td align="left">𝗌𝖺𝗇𝗌</td>
                                <td align="center">s</td>
                                <td align="left">Sans-serif style</td>
                                <td align="left">𝗌𝖺𝗇𝗌</td>
                            </tr>
                            <tr>
                                <td align="left">bold 𝗌𝖺𝗇𝗌</td>
                                <td align="center">bs</td>
                                <td align="left">Bold sans-serif</td>
                                <td align="left">𝗯𝗼𝗹𝗱 𝘀𝗮𝗻𝘀</td>
                            </tr>
                            <tr>
                                <td align="left">italic 𝗌𝖺𝗇𝗌</td>
                                <td align="center">is</td>
                                <td align="left">Italic sans-serif</td>
                                <td align="left">𝘪𝘵𝘢𝘭𝘪𝘤 𝘴𝘢𝘯𝘴</td>
                            </tr>
                            <tr>
                                <td align="left">bold italic sans</td>
                                <td align="center">bis</td>
                                <td align="left">Bold italic sans-serif</td>
                                <td align="left">𝙗𝙤𝙡𝙙 𝙞𝙩𝙖𝙡𝙞𝙘 𝙨𝙖𝙣𝙨</td>
                            </tr>
                            <tr>
                                <td align="left">circled</td>
                                <td align="center">o</td>
                                <td align="left">Letters within circles</td>
                                <td align="left">ⓒⓘⓡⓒⓛⓔⓓ</td>
                            </tr>
                            <tr>
                                <td align="left">circled negative</td>
                                <td align="center">on</td>
                                <td align="left">-- negative</td>
                                <td align="left">🅒🅘🅡🅒🅛🅔🅓</td>
                            </tr>
                            <tr>
                                <td align="left">squared</td>
                                <td align="center">q</td>
                                <td align="left">Letters within squares</td>
                                <td align="left">🅂🅀🅄🄰🅁🄴🄳</td>
                            </tr>
                            <tr>
                                <td align="left">squared negative</td>
                                <td align="center">qn</td>
                                <td align="left">-- negative</td>
                                <td align="left">🆂🆀🆄🅰🆁🅴🅳</td>
                            </tr>
                            <tr>
                                <td align="left">paranthesis</td>
                                <td align="center">p</td>
                                <td align="left">Letters within paranthesis</td>
                                <td align="left">⒫⒜⒭⒠⒩⒯⒣⒠⒮⒤⒮</td>
                            </tr>
                            <tr>
                                <td align="left">fullwidth</td>
                                <td align="center">w</td>
                                <td align="left">Wider monospace font</td>
                                <td align="left">ｆｕｌｌｗｉｄｔｈ</td>
                            </tr>
                            <tr>
                                <td align="left">flags</td>
                                <td align="center">f</td>
                                <td align="left">Regional codes</td>
                                <td align="left">🇩🇰 🇺 🇳 🇮 🇨 🇴 🇩 🇪</td>
                            </tr>
                            <tr>
                                <td align="left">numbers dot</td>
                                <td align="center">nd</td>
                                <td align="left">Numbers with trailing dot</td>
                                <td align="left">⒈⒉⒊⒋</td>
                            </tr>
                            <tr>
                                <td align="left">numbers comma</td>
                                <td align="center">nc</td>
                                <td align="left">Numbers with trailing comma</td>
                                <td align="left">🄂🄃🄄🄅</td>
                            </tr>
                            <tr>
                                <td align="left">number double circled</td>
                                <td align="center">ndc</td>
                                <td align="left">Numbers within double circle</td>
                                <td align="left">⓵⓶⓷⓸</td>
                            </tr>
                            <tr>
                                <td align="left">roman</td>
                                <td align="center">r</td>
                                <td align="left">Roman numerals</td>
                                <td align="left">Ⅰ, Ⅱ, ⅯⅯⅩⅩⅢ</td>
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
                    <table class="table">
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
                                <td align="center">s</td>
                                <td align="center">𝑎̶𝑏̶𝑐̶𝑑̶𝑒̶𝑓̶</td>
                            </tr>
                            <tr>
                                <td>strike-curly</td>
                                <td align="center">sc</td>
                                <td align="center">𝑎̴𝑏̴𝑐̴𝑑̴𝑒̴𝑓̴</td>
                            </tr>
                            <tr>
                                <td>underline</td>
                                <td align="center">u</td>
                                <td align="center">𝑎̲𝑏̲𝑐̲𝑑̲𝑒̲𝑓̲</td>
                            </tr>
                            <tr>
                                <td>underline-curly</td>
                                <td align="center">uc</td>
                                <td align="center">𝑎̰𝑏̰𝑐̰𝑑̰𝑒̰𝑓̰</td>
                            </tr>
                            <tr>
                                <td>underline-sm</td>
                                <td align="center">u-sm</td>
                                <td align="center">𝑎̠𝑏̠𝑐̠𝑑̠𝑒̠𝑓̠</td>
                            </tr>
                            <tr>
                                <td>underline-double</td>
                                <td align="center">ud</td>
                                <td align="center">𝑎̳𝑏̳𝑐̳𝑑̳𝑒̳𝑓̳</td>
                            </tr>
                            <tr>
                                <td>underline-double-sm</td>
                                <td align="center">ud-sm</td>
                                <td align="center">𝑎͇𝑏͇𝑐͇𝑑͇𝑒͇𝑓͇</td>
                            </tr>
                            <tr>
                                <td>overline</td>
                                <td align="center">o</td>
                                <td align="center">𝑎̅𝑏̅𝑐̅𝑑̅𝑒̅𝑓̅</td>
                            </tr>
                            <tr>
                                <td>overline-curly</td>
                                <td align="center">oc</td>
                                <td align="center">𝑎̃𝑏̃𝑐̃𝑑̃𝑒̃𝑓̃</td>
                            </tr>
                            <tr>
                                <td>overline-sm</td>
                                <td align="center">o-sm</td>
                                <td align="center">𝑎̄𝑏̄𝑐̄𝑑̄𝑒̄𝑓̄</td>
                            </tr>
                            <tr>
                                <td>overline-double</td>
                                <td align="center">od</td>
                                <td align="center">𝑎̿𝑏̿𝑐̿𝑑̿𝑒̿𝑓̿</td>
                            </tr>
                            <tr>
                                <td>slash</td>
                                <td align="center">sl</td>
                                <td align="center">𝑎̸𝑏̸𝑐̸𝑑̸𝑒̸𝑓̸</td>
                            </tr>
                            <tr>
                                <td>cross-above</td>
                                <td align="center">ca</td>
                                <td align="center">𝑎̽𝑏̽𝑐̽𝑑̽𝑒̽𝑓̽</td>
                            </tr>
                            <tr>
                                <td>plus-below</td>
                                <td align="center">pb</td>
                                <td align="center">𝑎̟𝑏̟𝑐̟𝑑̟𝑒̟𝑓̟</td>
                            </tr>
                            <tr>
                                <td>enclose-circle</td>
                                <td align="center">en-c</td>
                                <td align="center">𝑎⃝ 𝑏⃝ 𝑐⃝ </td>
                            </tr>
                            <tr>
                                <td>enclose-circle-backslash</td>
                                <td align="center">en-cb</td>
                                <td align="center">𝑎⃠ 𝑏⃠ 𝑐⃠ </td>
                            </tr>
                            <tr>
                                <td>enclose-square</td>
                                <td align="center">en-s</td>
                                <td align="center">𝑎⃞ 𝑏⃞ 𝑐⃞ </td>
                            </tr>
                            <tr>
                                <td>enclose-diamond</td>
                                <td align="center">en-d</td>
                                <td align="center">𝑎⃟ 𝑏⃟ 𝑐⃟ </td>
                            </tr>
                            <tr>
                                <td>enclose-screen</td>
                                <td align="center">en-scr</td>
                                <td align="center">𝑎⃢ 𝑏⃢ 𝑐⃢ </td>
                            </tr>
                            <tr>
                                <td>enclose-keycap</td>
                                <td align="center">en-k</td>
                                <td align="center">𝑎⃣ 𝑏⃣ 𝑐⃣ </td>
                            </tr>
                            <tr>
                                <td>halo-breve</td>
                                <td align="center">hb</td>
                                <td align="center">𝖺҈ 𝖻҈ 𝖼҈ </td>
                            </tr>
                            <tr>
                                <td>halo-grave</td>
                                <td align="center">hg</td>
                                <td align="center">𝖺҉ 𝖻҉ 𝖼҉ </td>
                            </tr>
                            <tr>
                                <td>𝑛-above</td>
                                <td>{a..x}-a</td>
                                <td align="center">𝑎ͣ𝑎ͨ𝑎ͩ𝑎ͤ𝑎ͪ𝑎ͥ𝑎ͫ𝑎ͦ𝑎ͬ𝑎ͧ𝑎ͮ𝑎ͯ</td>
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
