<?php
/**
 * Create Product Page Sample File
 *
 * This file contains HTML codes to render your desire page
 *
 * @package    Instagram_Sales\templates\admin
 * @since      1.0.0
 */
?>
<div class="wrap">
    <hr class="wp-header-end">
    <h1 class="wp-heading-inline "><?php _e('لینک فروش اینستاگرام',INSTAGRAM_SALES);?></h1>
</div>

<h2><?php _e('جزئیات صورتحساب',INSTAGRAM_SALES);?></h2>
<table class="form-table" role="presentation">
    <tbody>
    <tr>
        <th scope="row"><label for="blogname"><?php _e('انتخاب کاربر', INSTAGRAM_SALES);?></label></th>
        <td>
            <select class="products-names-selectbox" name="product">
                <?php
                foreach ($users as $user){
                ?>
                    <option value="<?php echo $user->ID?>"><?php echo $user->user_login?></option>
                <?php
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_first_name"><?php _e('نام',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_first_name">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_last_name"><?php _e('نام خانوادگی',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_last_name">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_company"><?php _e('نام شرکت',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_company">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_country"><?php _e('کشور',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_country">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_address_1"><?php _e('آدرس خیابان',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_address_1">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_address_2"><?php _e('آپارتمان، مجتمع، واحد و... (اختیاری)',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_address_2">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_city"><?php _e('شهر',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_city">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_state"><?php _e('استان',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_state">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_postcode"><?php _e('کد پستی',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_postcode">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_phone"><?php _e('تلفن',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_phone">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for="billing_email"><?php _e('آدرس ایمیل',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <input type="text" name="billing_email">
        </td>
    </tr>
    <tr>
        <th scope="row">
            <label for=""><?php _e('روش پرداخت',INSTAGRAM_SALES)?></label>
        </th>
        <td>
            <?php
            $available_gateways = WC()->payment_gateways->get_available_payment_gateways();
            foreach ( $available_gateways as $gateway ) {?>
                <li class="wc_payment_method payment_method_<?php echo esc_attr( $gateway->id ); ?>">
                    <input id="payment_method_<?php echo esc_attr( $gateway->id ); ?>" type="radio" class="input-radio" name="payment_method" value="<?php echo esc_attr( $gateway->id ); ?>" <?php checked( $gateway->chosen, true ); ?> data-order_button_text="<?php echo esc_attr( $gateway->order_button_text ); ?>" />

                    <label for="payment_method_<?php echo esc_attr( $gateway->id ); ?>">
                        <?php echo $gateway->get_title(); ?> <?php echo $gateway->get_icon(); ?>
                    </label>
                    <?php if ( $gateway->has_fields() || $gateway->get_description() ) : ?>
                        <div class="payment_box payment_method_<?php echo esc_attr( $gateway->id ); ?>" <?php if ( ! $gateway->chosen ) :  ?>style="display:none;"<?php endif; ?>>
                            <?php $gateway->payment_fields(); ?>
                        </div>
                    <?php endif; ?>
                </li>
                <?php
            }
            ?>
        </td>
    </tr>
    </tbody>
</table>


