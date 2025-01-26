<?php
namespace Instagram_Sales\Includes\Admin;

use Instagram_Sales\Includes\Interfaces\Action_Hook_Interface;
use Instagram_Sales\Includes\PageHandlers\Admin\Create_Product_Page_Handler;
use Instagram_Sales\Includes\PageHandlers\Admin\Second_Page_Handler;
use Instagram_Sales\Includes\PageHandlers\Order_Page_Handler;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Admin_Menu.
 * create admin menu property
 * @package Instagram_Sales\Admin
 */
class Admin_Menu  implements Action_Hook_Interface {
    private $page_title;
    private $menu_title;
    private $capability;
    private $menu_slug;
    private $callable_function;
    private $icon_url;
    private $position;

    public function __construct($initial_value) {
        $this->page_title        = $initial_value['page_title'];
        $this->menu_title        = $initial_value['menu_title'];
        $this->capability        = $initial_value['capability'];
        $this->menu_slug         = $initial_value['menu_slug'];
        $this->callable_function = $initial_value['callable_function'];
        $this->icon_url          = $initial_value['icon_url'];
        $this->position          = $initial_value['position'];

        add_action('admin_menu', array($this , 'register_add_action'));
    }

    public function register_add_action() {
         add_menu_page(
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            array( $this, $this->callable_function ),
            $this->icon_url,
            $this->position
        );
    }

    public function instagram_menu_handler() {
        $view = new Create_Product_Page_Handler();
        $view->render();
    }

}