<?php

namespace Instagram_Sales\Includes\Init;

use Instagram_Sales\Includes\Interfaces\Action_Hook_Interface;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * register public style & script
 * @package Instagram_Sales\Includes\Init
 */
class Public_Hook implements Action_Hook_Interface{
    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * constructor.
     * @param string $plugin_name
     * @param string $version
     */
    public function __construct($plugin_name ) {
        $this->plugin_name = $plugin_name;
        $this->register_add_action();
    }
    /**
     * call enqueue style and script
     */
    public function register_add_action() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

//        add_action('wp_head', array($this , 'add_header'));
    }
    /**
     * enqueue style
     */
    public function enqueue_styles(){
        wp_enqueue_style(
            $this->plugin_name . '-public-style',
            INSTAGRAM_SALES_CSS . 'style.css',
            array(),
            INSTAGRAM_SALES_CSS_VERSION,
            'all'
        );
        wp_enqueue_style(
            $this->plugin_name . 'fontawsome-style',
            INSTAGRAM_SALES_CSS . 'all.min.css',
            array(),
            '5.15.3',
            'all'
        );

    }
    /**
     * enqueue script
     */
    public function enqueue_scripts(){
        wp_enqueue_script(
            $this->plugin_name . '-public-script',
            INSTAGRAM_SALES_JS . 'script.js',
            array( 'jquery' ),
            INSTAGRAM_SALES_JS_VERSION,
            true
        );
        wp_enqueue_script(
            $this->plugin_name . 'fontawsome-script',
            INSTAGRAM_SALES_JS . 'all.min.js',
            array( 'jquery' ),
            '5.15.3',
            true
        );
    }

    /**
     * add header to shop page
     */
    public function add_header()
    {
        if (is_shop() || is_single()){
            $enable_user_order = get_option( 'enable_create_user_order' , false);
            $user_order = get_option( 'selected_user_ID' , false);
            if ($enable_user_order && $user_order){
                echo '<div style="background: red;color: white;font-size: 20px">';
                echo 'shop page';
                echo '</div>';
            }
        }
    }
}