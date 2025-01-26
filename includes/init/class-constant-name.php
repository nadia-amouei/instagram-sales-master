<?php

/**
 * Constant Class File
 *
 * This file contains Constant class which defines needed constants to ease
 * your plugin development processes.
 *
 * @package    Instagram_Sales
 * @author     MWD (Mihan Web Design)
 */

namespace Instagram_Sales\Includes\Init;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Constant_Name
 * @package Instagram_Sales\Includes\Init
 */
class Constant_Name {
    public static function define_constant() {

        if (!defined('INSTAGRAM_SALES')) {
            define('INSTAGRAM_SALES', 'instagram-sales');
        }
        if (!defined('INSTAGRAM_SALES_PATH')) {
            define('INSTAGRAM_SALES_PATH', trailingslashit(plugin_dir_path(dirname(dirname(__FILE__)))));
        }
        if ( ! defined( 'INSTAGRAM_SALES_URL' ) ) {
            define( 'INSTAGRAM_SALES_URL', trailingslashit( plugin_dir_url( dirname( dirname( __FILE__ ) ) ) ) );
        }

        if (!defined('INSTAGRAM_SALES_TPL')) {
            define('INSTAGRAM_SALES_TPL',  trailingslashit(INSTAGRAM_SALES_PATH) . 'templates');
        }

        if (!defined('INSTAGRAM_SALES_TPL_ADMIN')) {
            define('INSTAGRAM_SALES_TPL_ADMIN',  trailingslashit(INSTAGRAM_SALES_TPL) . 'admin/');
        }
        if (!defined('INSTAGRAM_SALES_TPL_FRONT')) {
            define('INSTAGRAM_SALES_TPL_FRONT',  trailingslashit(INSTAGRAM_SALES_TPL) . 'front/');
        }

        if (!defined('INSTAGRAM_SALES_CSS')) {
            define('INSTAGRAM_SALES_CSS', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/css/');
        }
        if (!defined('INSTAGRAM_SALES_FONTS')) {
            define('INSTAGRAM_SALES_FONTS', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/webfonts/');
        }
        if (!defined('INSTAGRAM_SALES_JS')) {
            define('INSTAGRAM_SALES_JS', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/js/');
        }
        if (!defined('INSTAGRAM_SALES_IMG')) {
            define('INSTAGRAM_SALES_IMG', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/images/');
        }
        if (!defined('INSTAGRAM_SALES_ADMIN_CSS')) {
            define('INSTAGRAM_SALES_ADMIN_CSS', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/admin/css/');
        }
        if ( ! defined( 'INSTAGRAM_SALES_ADMIN_JS' ) ) {
            define( 'INSTAGRAM_SALES_ADMIN_JS', trailingslashit( INSTAGRAM_SALES_URL ) . 'assets/admin/js/' );
        }

        if (!defined('INSTAGRAM_SALES_ADMIN_IMG')) {
            define('INSTAGRAM_SALES_ADMIN_IMG', trailingslashit(INSTAGRAM_SALES_URL) . 'assets/admin/images/');
        }
        if (!defined('INSTAGRAM_SALES_INC')) {
            define('INSTAGRAM_SALES_INC', trailingslashit(INSTAGRAM_SALES_PATH . 'includes'));
        }
        if (!defined('INSTAGRAM_SALES_PUB_PATH')) {
            define('INSTAGRAM_SALES_PUB_PATH', trailingslashit(INSTAGRAM_SALES_PATH . 'publicfiles'));
        }
        if (!defined('INSTAGRAM_SALES_PUB_TPL_PATH')) {
            define('INSTAGRAM_SALES_PUB_TPL_PATH', trailingslashit(INSTAGRAM_SALES_PUB_PATH . 'template'));
        }
        if (!defined('INSTAGRAM_SALES_LANG')) {
            define('INSTAGRAM_SALES_LANG', trailingslashit(INSTAGRAM_SALES_PATH . 'languages'));
        }
        if (!defined('INSTAGRAM_SALES_LOGS')) {
            define('INSTAGRAM_SALES_LOGS', trailingslashit(INSTAGRAM_SALES_PATH . 'logs'));
        }
        if (!defined('INSTAGRAM_SALES_CSS_VERSION')) {
            define('INSTAGRAM_SALES_CSS_VERSION', '1.0.1');
        }
        if (!defined('INSTAGRAM_SALES_JS_VERSION')) {
            define('INSTAGRAM_SALES_JS_VERSION', '1.0.1');
        }
        if (!defined('INSTAGRAM_SALES_ADMIN_CSS_VERSION')) {
            define('INSTAGRAM_SALES_ADMIN_CSS_VERSION', '1.0.0');
        }
        if (!defined('INSTAGRAM_SALES_ADMIN_JS_VERSION')) {
            define('INSTAGRAM_SALES_ADMIN_JS_VERSION','1.0.0');
        }
        if (!defined('INSTAGRAM_SALES_VERSION')) {
            define('INSTAGRAM_SALES_VERSION', '1.0.0');
        }
        if (!defined('INSTAGRAM_SALES_MAIN_NAME')) {
            define('INSTAGRAM_SALES_MAIN_NAME', 'instagram-sales');
        }
        if (!defined('INSTAGRAM_SALES_DB_VERSION')) {
            define('INSTAGRAM_SALES_DB_VERSION', '1.0.0');
        }
        if (!defined('INSTAGRAM_SALES_TEXTDOMAIN')) {
            define('INSTAGRAM_SALES_TEXTDOMAIN', 'instagram-sales-textdomain');
        }
        if (!defined('INSTAGRAM_SALES_TABLE')) {
            define('INSTAGRAM_SALES_TABLE', 'instagram_sales');
        }
    }
}