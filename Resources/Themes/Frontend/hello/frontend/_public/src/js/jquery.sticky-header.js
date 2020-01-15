$(window).scroll(function() {

    var header = $('.header-sticky-main');

    if ($(this).scrollTop() > 250){
        header.addClass('fixed');
    }
    else{
        header.removeClass('fixed');
    }
});