<?php
/**
 * Page Handler Interface File
 *
 * This file contains interface which you must implement whenever you want
 * to load a page.
 *
 * @package    Instagram_Sales\Includes\PageHandlers\Contracts
 * @since      1.0.0
 */

namespace Instagram_Sales\Includes\PageHandlers\Contracts;

/**
 * Interface Page_Handler
 *
 * @package Instagram_Sales\Includes\PageHandlers\Contracts
 */
interface Page_Handler {

	/**
	 * Render method to render a page with router
	 *
	 * This method must be implement by children who implement this interface.
	 *
	 * @since   1.0.0
	 * @access  public
	 */
	public function render();
}
