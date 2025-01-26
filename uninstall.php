<?php
/**
 * next shopping list Uninstall
 *
 * Uninstalling deletes its custom table
 *
 * @package next-shopping-list\Uninstaller
 * @version 1.0.0
 */
defined( 'WP_UNINSTALL_PLUGIN' ) || exit;


// Clear any cached data that has been removed.
wp_cache_flush();