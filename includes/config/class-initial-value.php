<?php
namespace Instagram_Sales\Includes\Config;
/**
 * Class Initial_Value.
 * If you need to initial value to start your plugin or need them for
 * each time that WordPress run your plugin, you can use from this class.
 *
 * @package    Instagram_Sales\Includes\Config
 */
class Initial_Value {

    public static function menu_page_value() {
        $initial_value = [
            'page_title'        => __('لینک فروش در اینستاگرام',INSTAGRAM_SALES),
            'menu_title'        => __('لینک فروش در اینستاگرام',INSTAGRAM_SALES),
            'capability'        => 'manage_options',
            'menu_slug'         => 'Instagram-sales',
            'callable_function' => 'instagram_menu_handler',
            'icon_url'          => plugins_url( 'instagram-sales/assets/admin/images/instagram.png' ),
            'position'          => 60,
        ];
        return $initial_value;
    }

    public static function sub_menu_page_order_value() {
        $initial_value = [
            'parent-slug'       => 'Instagram-sales',
            'page_title'        => __('سفارشات',INSTAGRAM_SALES),
            'menu_title'        => __('سفارشات',INSTAGRAM_SALES),
            'capability'        => 'manage_options',
            'menu_slug'         => 'follow-up-orders',
            'callable_function' => 'sub_menu_orders_handler',
        ];
        return $initial_value;
    }

    public static function sub_menu_page_products_value() {
        $initial_value = [
            'parent-slug'       => 'Instagram-sales',
            'page_title'        => __('محصولات',INSTAGRAM_SALES),
            'menu_title'        => __('محصولات',INSTAGRAM_SALES),
            'capability'        => 'manage_options',
            'menu_slug'         => 'list-products',
            'callable_function' => 'sub_menu_products_handler',
        ];
        return $initial_value;
    }

}