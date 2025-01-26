<?php
/**
 * Sample Page Handler Class File
 *
 * This file contains Second_Page_Handler class which is used to render a page in your project
 * with a specific route or url.
 *
 * @package    Plugin_Name_Dir\Includes\PageHandlers
 * @author     Your_Name <youremail@nomail.com>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://yoursite.com
 * @since      1.0.0
 */

namespace Instagram_Sales\Includes\PageHandlers\Admin;



use Instagram_Sales\Includes\Functions\Utility;
use Instagram_Sales\Includes\Init\Db;
use Instagram_Sales\Includes\PageHandlers\Contracts\Page_Handler;


class Create_Product_Page_Handler implements Page_Handler {

	public function render() {
        if ( is_user_logged_in() ) {
            $db = new Db();
            $users = $db->get_users();
            Utility::load_template( 'instagram-setting', compact('users'), 'admin' );
//            Utility::load_template( 'instagram-setting', array(), 'admin' );
            exit;
        } else {
            //TODO redirect to login page
        }
	}
}
