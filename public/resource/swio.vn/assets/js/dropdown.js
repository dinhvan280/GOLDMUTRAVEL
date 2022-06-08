$(document).on("click", ".dropdown", function() {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(100);
});

$(document).on("focusout", ".dropdown", function() {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(100);
});

$(document).on("click", ".dropdown .dropdown-menu li", function() {
    // // TEMP DISCARD
    // $(this).parents('.dropdown').find('span').text($(this).text());
    // $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});