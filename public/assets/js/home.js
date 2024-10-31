$(document).ready(function () {
    function set() {
        let record = $('.record');
        // remove old mouseover
        record.off('mouseover');
        record.off('mouseout');

        record.on('mouseover', function () {
            if ($(this).prev().length > 0) {
                $(this).prev().removeClass('border-b');
            }
        });
        record.on('mouseout', function () {
            if ($(this).prev().length > 0) {
                $(this).prev().addClass('border-b');
            }
        });
    }

    set();

    let fontGird = $('#font-grid');

    let loading = false;

    // load more data when scroll
    $('#main').on('scroll', function () {
        let page = window.nextPage;
        if ($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight && !loading && page) {
            $.ajax({
                url: page,
                type: "GET",
                beforeSend: function () {
                    loading = true;
                },
                success: function (response) {
                    if (Object.keys(response).length > 0) {
                        window.nextPage = response.next_page_url;
                        let styles = '<style>';
                        for (let index = 0; index < response.data.length; index++) {
                            const font = response.data[index];
                            let record = $('.record')[0];
                            record = $(record).clone();
                            // change href to font url
                            record.attr('href', '/fonts/' + font.slug);
                            record.find('.font-name').text(font.name);
                            record.find('.font-format').text(font.format);
                            record.find('.font-author').text(font.author);
                            record.find('.font-preview').text(font.demo_text);
                            record.find('.font-preview').attr('style', 'font-family: ' + font.name + ', serif;');
                            fontGird.append(record);
                            styles += '@font-face {font-family: "' + font.name + '";src: url("/' +font.url + '");}';
                        }
                        styles += '</style>';
                        $('head').append(styles);
                        set();
                    }
                    loading = false;
                },
                error: function () {
                    loading = false;
                }
            })
        }
    })
});
