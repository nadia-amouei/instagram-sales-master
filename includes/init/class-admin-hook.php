<?php

namespace Instagram_Sales\Includes\Init;

use Instagram_Sales\Includes\Interfaces\Action_Hook_Interface;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * register admin style & script
 */
class Admin_Hook implements Action_Hook_Interface{

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
     * @param $plugin_name
     * @param $version
     */
    public function __construct($plugin_name) {
        $this->plugin_name = $plugin_name;
        $this->register_add_action();
    }
    /**
     * fire enqueues.
     */
    public function register_add_action() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_styles' ) );
        add_action( 'admin_enqueue_scripts', array($this,'enqueue_scripts') );

    }
    /**
     * enqueue style.
     */
    public function enqueue_styles(){
        wp_enqueue_style(
            $this->plugin_name . '-admin-style',
            INSTAGRAM_SALES_ADMIN_CSS . 'style.css',
            array(),
            INSTAGRAM_SALES_CSS_VERSION,
            'all'
        );
        wp_enqueue_style(
            $this->plugin_name . '-select2-style',
            INSTAGRAM_SALES_ADMIN_CSS . 'select2.min.css',
            array(),
            INSTAGRAM_SALES_CSS_VERSION,
            'all'
        );
    }

    /**
     * enqueue script.
     */
    public function enqueue_scripts(){
        wp_enqueue_script(
            $this->plugin_name . '-select2-script',
            INSTAGRAM_SALES_ADMIN_JS . 'select2.min.js',
            array( 'jquery' ),
            '4.1.0',
            false
        );
        wp_enqueue_script(
            $this->plugin_name . '_admin_script',
            INSTAGRAM_SALES_ADMIN_JS . 'script.js',
            array( 'jquery' ),
            INSTAGRAM_SALES_JS_VERSION,
            false
        );
    }



}
