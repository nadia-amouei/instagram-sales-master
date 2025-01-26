<?php
/**
* Action_Hook_Interface interface File
*
* This file contains Action_Hook_Interface_Interface. If you to use add_action and remove_action in your class,
* you must use from this contract to implement it.
*
* @package    Instagram_Sales
* @author     MWD
*/

namespace Instagram_Sales\Includes\Interfaces;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Interface
 * @package Instagram_Sales\Includes\Interfaces
 */
interface Action_Hook_Interface {

/**
* Register actions that the object needs to be subscribed to.
**/
    public function register_add_action();
}