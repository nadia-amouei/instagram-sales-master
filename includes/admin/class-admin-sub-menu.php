<?php
/**
 * Admin_Sub_Menu Class File
 *
 * This file contains Admin_Sub_Menu class. If you want create an sub menu page
 * under an admin page (inside Admin panel of WordPress), you can use from this class.
 *
 * @package    Plugin_Name_Dir\Includes\Admin
 * @author     Your_Name <youremail@nomail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

namespace Instagram_Sales\Includes\Admin;

use Instagram_Sales\Includes\PageHandlers\Admin\Orders_Page_Handler;
use Instagram_Sales\Includes\PageHandlers\Admin\Products_Page_Handler;

/**_
 * Class Admin_Sub_Menu.
 * If you want create an sub menu page under an admin page
 * (inside Admin panel of WordPress), you can use from this class.
 *
 * @package    Instagram_Sales\Includes\Admin
 */
class Admin_Sub_Menu {

    private $parent_slug;
    private $page_title;
    private $menu_title;
    private $capability;
    private $menu_slug;
    private $callable_function;

    /**
     * Admin_Sub_Menu constructor.
     * This constructor gets initial values to send to add_submenu_page function to
     * create admin submenu.
     *
     * @access public
     *
     * @param array $initial_value Initial value to pass to add_submenu_page function.
     */
    public function __construct( $initial_value ) {
        $this->parent_slug       = $initial_value['parent-slug'];
        $this->page_title        = $initial_value['page_title'];
        $this->menu_title        = $initial_value['menu_title'];
        $this->capability        = $initial_value['capability'];
        $this->menu_slug         = $initial_value['menu_slug'];
        $this->callable_function = $initial_value['callable_function'];

        add_action('admin_menu', array($this , 'add_admin_sub_menu_page'));
    }

    /**
     * Method add_admin_sub_menu_page in Admin_Menu Class
     *
     * Inside this method, we call add_submenu_page function to create admin menu
     * page in WordPress Admin Panel.
     *
     * @access  public
     */
    public function add_admin_sub_menu_page() {
        add_submenu_page(
            $this->parent_slug,
            $this->page_title,
            $this->menu_title,
            $this->capability,
            $this->menu_slug,
            array( $this, $this->callable_function )
        );

    }

    public function sub_menu_orders_handler() {
        $view = new Orders_Page_Handler();
        $view->render();
    }

    public function sub_menu_products_handler() {
        $view = new Products_Page_Handler();
        $view->render();
    }


}
