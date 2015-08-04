/* 
 * CHILD THEME SCRIPTS 
 */

(function($) {

    $(document).ready(function() {
        formExpand();

        shrinkMenu();
        jQuery(window).scroll(shrinkMenu)
        jQuery(window).resize(shrinkMenu)
        
        pushTopHeight();
        $(window).scroll(pushTopHeight);
        $(window).resize(pushTopHeight);

        $('.mobile_menuToggle').click(mobileMenuToggle);

        // stellar library for parallax
        $(window).stellar();
    });

    // Homepage: shows a Form (height difference on wrapper)
    function formExpand() {
        $('.expand_form_btn').click(function(){
            $(this).toggleClass('active');
            $('.form_holder').toggleClass('active');
        });
    }

    // changes the menu when scrolled down
    function shrinkMenu() {
	    var winPos = jQuery(window).scrollTop();
        var changeHeight = 500;
        if($('.paginaHeader').length > 0 ) {
            changeHeight = $('.paginaHeader').height() + $('.paginaHeader').offset().top;
        }
        console.log(changeHeight);
        
	    if (winPos > changeHeight ) {
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
	
 	