jQuery(document).ready(function() {
    jQuery('.products-names-selectbox').select2();

    jQuery("#order_created_link").click(function(){
        jQuery(this).focus();
        jQuery(this).select();
        document.execCommand('copy');
        jQuery("#copied").show().fadeOut(1200);
    })
});