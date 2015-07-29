/* 
 * 
 * CHILD THEME SCRIPTS 
 *
 */

(function($) {

    $(document).ready(function() {
       
        formExpand();

        jQuery(window).scroll(shrinkMenu)
		
		shrinkMenu();

    });
    function formExpand(){
        $('.expand_form_btn').click(function(){
            $(this).toggleClass('active');
            $('.form_holder').toggleClass('active');
        });
    }

    function shrinkMenu() {
	    var winPos = jQuery(window).scrollTop();
	    if (winPos > 500 ) {
	        jQuery('header').addClass('shrink');

	    } else {
	        jQuery('header').removeClass('shrink');
	    }
    }

})(jQuery);
	
 	