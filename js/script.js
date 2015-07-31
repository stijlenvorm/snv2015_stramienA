/* 
 * CHILD THEME SCRIPTS 
 */

(function($) {

    $(document).ready(function() {
        formExpand();
        jQuery(window).scroll(shrinkMenu)
		shrinkMenu();
        
        pushTopHeight();

        $(window).scroll(pushTopHeight);
        $(window).resize(pushTopHeight);

        $('.mobile_menuToggle').click(mobileMenuToggle);
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

    // fixes the .pushTop div height to the menu bar height
    function pushTopHeight() {
        var menuBarHeight = $('.pageHeader').height();
        
        if( window.innerWidth < 600 && $('#wpadminbar').length > 0 ) {
            menuBarHeight -= $('#wpadminbar').height();
        }

        $('.pushTop').height(menuBarHeight);
    }

    // open/close menu on click
    function mobileMenuToggle() {
        $('.header_menu').toggleClass('hideMenuMobile');
    }

})(jQuery);
	
 	