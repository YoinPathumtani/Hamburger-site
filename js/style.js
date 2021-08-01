
jQuery(function() {
    jQuery('#overlay').hide();
    jQuery('#is-open').click(function() {
        jQuery('#overlay').fadeIn();
        jQuery('#g-nav').toggleClass('show');
        jQuery('body').toggleClass('fixed');
    });
    jQuery('#is-close').click(function() {
        jQuery('#overlay').fadeOut();
        jQuery('#g-nav').removeClass('show');
        jQuery('body').removeClass('fixed');
    });
});
