/**
 * extra.js
 *
 * My own custom js
 *
 *
 */

(function( $ ) {
    "use strict";




 $(window).scroll(function(){

    var wScroll = $(this).scrollTop();

     $('.middle').css({
       'transform' : 'translate(0px, '+ wScroll /4 +'%)'
     });


     $('.front').css({
       'transform' : 'translate(0px, -'+ wScroll /20 +'%)'
     });


 });


})(jQuery);
