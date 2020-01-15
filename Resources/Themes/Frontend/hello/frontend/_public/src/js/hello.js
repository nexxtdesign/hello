/*!
 * hello Config v1.0.0
 * Developer 2020 nexxtdesign, Amir Fayaz.
 * Licensed under http://www.apache.org/licenses/LICENSE-2.0
 */



(function($, window) {
// LANGUAGE
var lang = $('html').attr('lang');
var langcode = [];
console.log("LANGUAGE: " +  lang);
// MASTER
console.info('DEV BRANCH');








// BACK TO TOP
$(window).scroll(function() {
    $(this).scrollTop() >= 200 ? $(".backToTop").addClass('visible') : $(".backToTop").removeClass('visible')

    //$(this).scrollTop() >= 200 ? $(".backToTop").fadeIn() : $(".backToTop").fadeOut()
    }),
$(".backToTop").click(function() {
    $("body,html").animate({
            scrollTop: 0
    }, 400)
});  




//console.log(this + 'init')
})(jQuery, window);
