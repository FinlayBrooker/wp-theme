/**
 * social.js
 *
 * My own custom js
 *
 *
 */

(function( $ ) {
    "use strict";


     $('.social-toggle').on('click', function() {
       $(this).next().toggleClass('open-menu');
     });


})(jQuery);
