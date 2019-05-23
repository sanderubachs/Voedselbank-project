$('.info-block').click(function () {
    $('.popup').css('display', 'inline-flex');
    $('body').css({'overflow': 'hidden'});
});

$('.close-popup').click(function () {
    $('.popup').css('display', 'none');
    $('body').css({'overflow-y': 'scroll'});
});