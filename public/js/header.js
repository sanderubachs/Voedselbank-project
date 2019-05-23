// Change font size
$('.fontSize').click(function () {
    // Remove all the active classes
    $('html').find('.fontSize').removeClass('active');
    // Add active class to active font size
    $(this).addClass('active');

    // Change font size to correct size
    if ($(this).hasClass('font-1')) {
        $('html').css('font-size', '62.5%');
    }
    else if ($(this).hasClass('font-2')) {
        $('html').css('font-size', '67.5%');
    }
    else if ($(this).hasClass('font-3')) {
        $('html').css('font-size', '72.5%');
    }
});