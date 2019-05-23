$('.tooltip-btn').click(function () {
    $('.tooltip').css('display', 'inline-flex');
    $('body').css({'overflow': 'hidden'});
});

$('.close-tooltip').click(function () {
    $('.tooltip').css('display', 'none');
    $('body').css({'overflow-y': 'scroll'});
});