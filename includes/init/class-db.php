<?php

namespace Instagram_Sales\Includes\Init;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * DB operation
 * @package Instagram_Sales\Includes\Init
 */
class Db{
    /**
     * @var string table name
     */
    public $table_name;

    /**
     *  constructor.
     * fill table name
     */
    public function __construct() {
        global $table_prefix;
        $this->table_name = $table_prefix . INSTAGRAM_SALES_TABLE;
    }

    /**
     * add tables if doesn't exist
     */
    public function create_table() {
        global $table_prefix, $wpdb;
        $table_name = $table_prefix . INSTAGRAM_SALES_TABLE;

        // Create Table if not exist
        if( $wpdb->get_var( "show tables like '$table_name'" ) != $table_name ) {
            //TODO create tables
        }


//        update_option(
//            'last_your_plugin_name_dbs_version',
//            intval( $new_modified_tables->db_version )
//        );
    }

    public function get_users()
    {
        global $wpdb;
        $users = $wpdb->get_results("SELECT * FROM $wpdb->users ORDER BY ID");
        return $users;
    }


}