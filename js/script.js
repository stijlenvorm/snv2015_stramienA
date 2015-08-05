/* 
 * CHILD THEME SCRIPTS 
 */

(function($) {

    $(document).ready(function() {
        
        // menu will reposition after scrolling below the .paginaHeader
        shrinkMenu();
        jQuery(window).scroll(shrinkMenu)
        jQuery(window).resize(shrinkMenu)

        // flexible push top cause of the fixed header...
        pushTopHeight();
        $(window).scroll(pushTopHeight);
        $(window).resize(pushTopHeight);

        // stellar library for parallax
        $(window).stellar();

        // mobile menu 
        mobileMenu = new MobileMenu('main_navigation', '.mobile_menuToggle');

        // all event listeners here
        $('.expand_form_btn').click(formExpand);

    });

    // Class: handles the mobile menu. Opens menu and sub-menus
    function MobileMenu(menuwrapperID, mobileMenuToggleButtonID) {
        var _this = this
        this.init = function() {
            $(mobileMenuToggleButtonID).click(_this.toggleMobileVisibility);
            $('.sub-menu').click(_this.openSubMenu);
            $('.sub-menu *').click(function(e) {
                e.stopPropagation();
            });
        }

        this.toggleMobileVisibility = function() {
            $('#' + menuwrapperID).toggleClass('hideMenuMobile');
        }

        this.openSubMenu = function() {
            $(this).children('li').toggleClass('show');
            $(this).toggleClass('show');
        }
        this.init();
    }

    // EventHandler: shows a Form (height difference on wrapper)
    function formExpand() {
        $(this).toggleClass('active');
        $('.form_holder').toggleClass('active');
    }

    // EventHandler: changes the menu when scrolled down
    function shrinkMenu() {
        var winPos = jQuery(window).scrollTop();
        var changeHeight = 500;
        if ($('.paginaHeader').length > 0) {
            changeHeight = $('.paginaHeader').height() + $('.paginaHeader').offset().top;
        }

        if (winPos > changeHeight) {
            jQuery('header').addClass('shrink');

        } else {
            jQuery('header').removeClass('shrink');
        }
    }

    // EventHandler: fixes the .pushTop div height to the menu bar height
    function pushTopHeight() {
        var menuBarHeight = $('.pageHeader').height();

        if (window.innerWidth < 600 && $('#wpadminbar').length > 0) {
            menuBarHeight -= $('#wpadminbar').height();
        }

        $('.pushTop').height(menuBarHeight);
    }

})(jQuery);
