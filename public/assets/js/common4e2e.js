// Sticky header
$(document).ready(function () {
    /* $('#sandbox-container input').datepicker({}); */
    // Check spelling input
    $(".txt-input").attr("spellcheck", "false");


    $(window).scroll(function () {
        // sticky navbar on scroll script
        if (this.scrollY > 20) {
            $('.menu').addClass("sticky");
        } else {
            $('.menu').removeClass("sticky");
        }
        if (this.scrollY > 500) {
            $('.scroll-up-btn').addClass("show");
        } else {
            $('.scroll-up-btn').removeClass("show");
        }
    });

    /* CLOSE MENU ACTIVE WHEN CLICK ANCHORS */
    jQuery(document).on("click", ".menu.active li:not('.sub-menu') a, .menu.active .nav-info-language", function(e) {
        e.stopPropagation();
        setTimeout(() => {
            if ($(".menu.active").length > 0) {
                $(".menu .toggle").click();
            }
        });
    });

    // slide-up script
    jQuery(document).on("click", ".scroll-up-btn", function() {
        $('html,body').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html,body').css("scrollBehavior", "auto");
    });

    // slide-up script
    jQuery(document).on("click", ".search-feature-view", function() {
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    // toggle menu/navbar script
    jQuery(document).on("click", ".toggle", function() {
        $('.menu').toggleClass("active");
        $('body').toggleClass("modal-open");
        $('.toggle').toggleClass("close-toggle");
    });

    jQuery(document).on("click", ".btn-switch", function() {
        $('.btn-switch').toggleClass('active');
    });

    jQuery(document).on("click", ".account #check1", function() {
        $('.re-new-password').toggleClass('active');
    });

    jQuery(document).on("click", ".ticket-footer-info", function() {
        $('.ticket-services-detail').toggleClass('open');
        $('.ticket-book').removeClass('open');
    });

    jQuery(document).on("click", ".btn-book", function() {
        $('.ticket-book').toggleClass('open');
        $('.ticket-services-detail').removeClass('open');
    });

    jQuery(document).on("click", ".close", function() {
        $('.ticket-services-detail').removeClass('open');
    });

    jQuery(document).on("click", ".buyer h3", function() {
        $('.buyer-info-detail').toggleClass('open');
        $('.buyer h3').toggleClass('active');
    });

    jQuery(document).on("click", ".sort-mobile-link", function(e) {
        e.stopPropagation();
        $('.search-sort-text').toggleClass('active');
        $('.search-feature').removeClass('active');
        $('.search-form > form').removeClass('active');

        /* CLICK OUTSIDE OUT */
        jQuery("html").one("click", function(e) {
            e.stopPropagation();
            $('.search-sort-text').removeClass('active');
        });
    });

    jQuery(document).on("click", ".sort-mobile-advanced", function() {
        $('.search-feature').toggleClass('active');
        $('.search-sort-text').removeClass('active');
        $('.search-form > form').removeClass('active');

    });

    /* CLICK CLOSE FILTER */
    jQuery(document).on("click", ".close-m", function() {
        jQuery(this).closest(".active").removeClass("active");
        /* CLEAR INPUT SEARCH */
        jQuery(this).closest("ul").find(".txt-input").val("");
    });

    /* RESET FILTER ON MOBILE */
    jQuery(document).on("click", ".btnMobileResetFilter", function() {
        jQuery(".search-drop-list").removeClass("active");
    });

    jQuery(document).on("click", ".check-point .search-drop > .txt-input", function() {
        $(this).siblings('.search-drop-list').addClass('active');
    });

    jQuery(document).on("click", ".btn-review", function() {
        $('.search-feature').removeClass('active');
    });

    jQuery(document).on("click", ".station-item-date", function() {
        $('.datepickers-container').addClass('open');
    });

    jQuery(document).on("click", ".search-form-item .myDatePicker", function() {
        $('.datepickers-container').removeClass('open');
    });

    jQuery(document).on("click", ".btn-mobile-search", function(e) {
        e.stopPropagation();

        $('.search-form > form').toggleClass('active');
        $('.btn-mobile-search').toggleClass('active');
        $('.search-sort-text').removeClass('active');
        $('body').toggleClass('modal-open');

        /* CLICK OUTSIDE OUT */
        jQuery("html").one("click", function(e) {
            e.stopPropagation();
            $('.search-form > form').removeClass('active');
            $('.btn-mobile-search').removeClass('active');
            $('.search-sort-text').removeClass('active');
            $('body').removeClass('modal-open');
        });
    });

    /* MOBILE :: CLOSE SEARCH FORM ON SUBMIT */
    jQuery(document).on("submit", ".search-form form", function(e) {
        jQuery(".btn-mobile-search").click();
    });

    /* STOP PROPAGATION */
    jQuery(".search-form form").on("click touchend", function(e) {
        e.stopPropagation();
    });
    /* END */

    jQuery(document).on("click", ".btn-services", function() {
        jQuery(this).find(".ticket-services-detail").removeClass("open");
    });

    jQuery(document).on("click", ".disscount-show", function() {
        jQuery(this).find(".disscount").toggleClass("open");
    });

    jQuery(document).on("click", ".discount-show", function() {
        $('.discount').toggleClass('open');
        $('.discount-show').toggleClass('active');
    });

    jQuery(document).on("click", ".info-buyer h3", function() {
        $('.info-buyer').toggleClass('active');
    });

    jQuery(document).on("click", ".menu-link-manage", function() {
        $('body').toggleClass('modal-open');
    });

    jQuery(document).on("click", ".btn-account", function(e) {
        if (jQuery(this).attr("data-is-logged") == 1) {
            e.stopPropagation();
            $('.account-mobile').toggleClass('open');
            $('.notification-mobile').removeClass('open');

            /* CLICK OUTSIDE OUT */
            jQuery("html").one("click", function(e) {
                e.stopPropagation();
                $('.account-mobile').removeClass('open');
            });
        } else {
            jQuery("#memberModal").modal();
        }
    });

    jQuery(document).on("click", ".acccount-form", function(e) {
        e.stopPropagation();
        $('.account-mobile').toggleClass('open');

        /* CLICK OUTSIDE OUT */
        jQuery("html").one("click", function(e) {
            e.stopPropagation();
            $('.account-mobile').removeClass('open');
        });
    });

    jQuery(document).on("click", ".btn-notification", function() {
        $('.notification-mobile').toggleClass('open');
    });

    /* HEADER DROPDOWN MENU */
    // If a link has a dropdown, add sub menu toggle.
    jQuery(document).on("click", ".menu .sub-menu > a", function(e) {
        e.stopPropagation();
        $(this).siblings(".nav-dropdown").toggle();
        // Close one dropdown when selecting another
        $(".nav-dropdown").not($(this).siblings()).hide();
        // Clicking away from dropdown will remove the dropdown class
        jQuery("html").one("click", function(e) {
            $(".nav-dropdown").hide();
        });
    });

    /* CLOSE ACTIVE MENU WHEN CLICK ANCHORS */
    jQuery(document).on("click", ".menu.active .nav-dropdown a", function(e) {
        e.stopPropagation();
        setTimeout(() => {
            $("body").removeClass("modal-open");
        });
    });
});