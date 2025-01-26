<?php
/**
 * Plugin Name: فروش در اینستاگرام
 * Plugin URI: http://mihanwebdesign.com/
 * Description: نمایش محصولات و پیگیری سفارش در اینستاگرام
 * Version: 1.0.0
 * Author: Mihan Web Design
 * Author URI: http://mihanwebdesign.com/
 * Text Domain: instagram-sales
 * Domain Path: /languages
 * Contact Us : info@mihanwebdesign.com
 * @package instagram-sales
 */

use Instagram_Sales\Includes\Admin\Admin_Menu;
use Instagram_Sales\Includes\Admin\Admin_Order_Meta_Box;
use Instagram_Sales\Includes\Config\Initial_Value;
use Instagram_Sales\Includes\Init\Admin_Hook;
use Instagram_Sales\Includes\Init\Ajax;
use Instagram_Sales\Includes\Init\Constant_Name;
use Instagram_Sales\Includes\Init\Public_Hook;

/**
 * If this file is called directly, then abort execution.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

final class Instagram_Sales {
    private static $instance;

    /**
     * constructor.
     * autoloader , constance and active and deactivation will be call
     */
    public function __construct() {
        $autoloader_path = 'includes/class-autoloader.php';
        require_once trailingslashit( plugin_dir_path( __FILE__ ) ) . $autoloader_path;
        Constant_Name::define_constant();
        register_activation_hook( __FILE__, array($this,'instagram_sales_activate') );
        register_deactivation_hook( __FILE__, array($this,'instagram_sales_deactivate') );
        load_plugin_textdomain(
            INSTAGRAM_SALES,
            false,
            dirname(plugin_basename(__FILE__)) . '/languages/'
        );
    }

    /**
     * Instace.
     * create an instace of plugin if its not exist
     * @return Instagram_Sales
     */
    public static function instance() {
        if ( is_null( ( self::$instance ) ) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * call css and js file.
     * enqueue css and js Admin and user side
     */
    public function run_instagram_sales_plugin() {
//        new Public_Hook( INSTAGRAM_SALES_MAIN_NAME);
        if (is_admin()){
            new Admin_Hook( INSTAGRAM_SALES_MAIN_NAME );
//            new Admin_Menu(Initial_Value::menu_page_value());//admins hooks and actions
            new Admin_Order_Meta_Box();
        }
//        new Ajax('add_to_instagram_sales_action','custom_ajaxurl');
    }

    /**
     * Create Table on activation.
     * check to see if the table is not exst then create it
     */
    public function instagram_sales_activate() {
        if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) and current_user_can( 'activate_plugins' ) ) {
            // Stop activation redirect and show error
            $message = __('برای فعالسازی این افزونه باید افزونه ووکامرس فعال باشد.',INSTAGRAM_SALES).'<br>
                            <a href="' . admin_url( 'plugins.php' ) . '">
                            &laquo;'.__('بازگشت به لیست افزونه ها',INSTAGRAM_SALES). '</a>';
            wp_die($message);
        }
        //TODO create table if needed
    }

    /**
     * deactivation.
     * noting will happen on this plugin deactivation
     */
    public function instagram_sales_deactivate()
    {
        // TODO reset configuration
        flush_rewrite_rules();
    }
}
$instagram_sales_object = Instagram_Sales::instance();
$instagram_sales_object->run_instagram_sales_plugin();