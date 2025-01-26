<?php
namespace Instagram_Sales\Includes\Init;

use Instagram_Sales\Includes\Interfaces\Action_Hook_Interface;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Ajax
 * @package Instagram_Sales\Includes\Init
 */
class Ajax implements Action_Hook_Interface{

    /**
     * @var string action name for ajax call
     */
    public $action;
    /**
     * @var string  name for ajax url
     */
    public $ajax_url;

    /**
     * constructor.
     * @param $action_name
     * @param $ajax_url
     */
    public function __construct($action_name , $ajax_url) {
       $this->action = $action_name;
       $this->ajax_url = $ajax_url;
       $this->register_add_action();
    }

    /**
     * register actions
     */
    public function register_add_action() {
        add_action( 'wp_enqueue_scripts', array( $this, 'register_script' ), 10 );
        add_action( 'admin_enqueue_scripts', array( $this, 'register_script' ), 10 );

        add_action( 'wp_ajax_' . $this->action , array($this , 'handle') );
        add_action( 'wp_ajax_nopriv_' . $this->action, array($this , 'handle') );
    }

    /**
     * register script
     */
    public function register_script() {
        wp_enqueue_script( 'ajax_script_handle', INSTAGRAM_SALES_JS . 'ajax-script.js', array( 'jquery' ) );
        wp_localize_script( 'ajax_script_handle', $this->ajax_url, array( 'ajaxurl' => admin_url( 'admin-ajax.php' )) );
    }

    /**
     * fire on ajax
     */
    public function handle() {
        //TODO handle ajax actions
        wp_die();
    }

}