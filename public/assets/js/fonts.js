$('#text_input').on('input', function (e) {
    var text = $(this).val();
    var font_temp = $('.font_temp');
    for (let index = 0; index < font_temp.length; index++) {
        const element = font_temp[index];
        $(element).text(text);
    }
});

let size_input = $('#size_input');
size_input.on('change', function (e) {
    var size = $(this).val();
    var font_temp = $('.font_temp');
    for (let index = 0; index < font_temp.length; index++) {
        const element = font_temp[index];
        $(element).css('font-size', size);
    }
    // remove px from size
    size = size.replace('px', '');
    range_input.val(size);
});
let range_input = $('#range_input');
range_input.on('change', function (e) {
    var size = $(this).val() + "px";
    var font_temp = $('.font_temp');
    for (let index = 0; index < font_temp.length; index++) {
        const element = font_temp[index];
        $(element).css('font-size', size);
    }
    // check size_input include size
    let option = size_input.find('option');
    let check = false;
    for (let index = 0; index < option.length; index++) {
        const element = option[index];
        if ($(element).val() == size) {
            size_input.val(size);
            check = true;
            break;
        }
    }
    if (!check) {
        size_input.append(`<option value="${size}">${size}</option>`);
        size_input.val(size);
    }
});
