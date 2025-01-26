jQuery(document).ready(function() {
    jQuery(document).on('click', '.add-to-next-shopping-list', function (e){
        e.preventDefault();
        let product_id = jQuery(this).closest('tr').children('td.product-remove').find('a.remove').data('product_id');

        jQuery.ajax({
            type: 'POST',
            url: custom_ajaxurl.ajaxurl,//where to submit the data
            data: {
                action     : 'add_to_instagram_sales_action',
                product_id : product_id,// PHP: $_POST['product_id']
            },
            beforeSend: function (response) {

            },
            success: function (response) {

            },
            error: function (xhr, ajaxOptions, thrownError) {

            },

        });
    });


});
