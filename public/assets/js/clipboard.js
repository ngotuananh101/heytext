$('document').ready(function () {
    var menuEl = document.querySelector("#kt_menu_item_wow");
    var menu = KTMenu.getInstance(menuEl);
    var clipboardHistoryEl = document.querySelector("#clipboardHistory");
    var clearClipboardHistory = document.querySelector("#clearClipboardHistory");
    menu.on("kt.menu.dropdown.show", function (e) {
        let clipboardHistory = localStorage.getItem('copied_data');
        if (clipboardHistory) {
            clipboardHistory = JSON.parse(clipboardHistory);
        } else {
            clipboardHistory = [];
        }
        let element = "";
        if (clipboardHistory.length > 0) {
            for (let index = 0; index < clipboardHistory.length; index++) {
                element += `
                <div class="mb-5 d-flex align-items-center">
                                <!--begin::Title-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-800 fs-6 text-hover-primary fw-semibold">
                                        ${clipboardHistory[index].text}
                                    </a>
                                    <span class="fs-7 text-muted fw-semibold">
                                        ${clipboardHistory[index].time} - ${clipboardHistory[index].title}
                                    </span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Copy-->
                                <button class="btn btn-icon btn-sm btn-light-primary ms-auto" id="copy_${clipboardHistory[index].text}"
                                    data-clipboard-text="${clipboardHistory[index].text}"
                                    data-clipboard-title="${clipboardHistory[index].title}"
                                    onclick="copyToClipboard(this)">
                                    <i class="ki-duotone ki-copy fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                               </button>
                               <!--end::Copy-->
                            </div>
                `;
            }
        } else {
            element = `
            <div class="mb-5 d-flex align-items-center justify-content-center">
                <span class="fs-7 text-muted fw-semibold">
                    ${text_no_history}
                </span>
            </div>
            `;
        }

        clipboardHistoryEl.innerHTML = element;
    });

    clearClipboardHistory.addEventListener("click", function () {
        localStorage.removeItem('copied_data');
        clipboardHistoryEl.innerHTML = "";
    });
});

function copyToClipboard(element) {
    var text = element.getAttribute('data-clipboard-text');
    var title = element.getAttribute('data-clipboard-title');
    var time = new Date().toLocaleString();
    let datas = localStorage.getItem('copied_data');
    if (datas) {
        datas = JSON.parse(datas);
        datas.push({
            text: text,
            title: title,
            time: time
        });
        localStorage.setItem('copied_data', JSON.stringify(datas));
    } else {
        datas = [];
        datas.push({
            text: text,
            title: title,
            time: time
        });
        localStorage.setItem('copied_data', JSON.stringify(datas));
    }
    toastr.info(text_re_copied);
}
