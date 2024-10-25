$(document).ready(function (){
    let record = $('.record');
    record.on('mouseover', function(){
        if ($(this).prev().length > 0) {
            $(this).prev().removeClass('border-b');
        }
    });

    record.on('mouseout', function(){
        if ($(this).prev().length > 0) {
            $(this).prev().addClass('border-b');
        }
    });
});
