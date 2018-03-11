<?php
/**
 * Returns the request method
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package classes
 */

namespace app\classes;


class RequestData
{
	/**
	 * Returns the request method
	 *
	 * @return Array Requisition data
	 */
	protected static function request() {
		$request = $_SERVER["REQUEST_METHOD"];
		if ($request == "POST")
		    return $_POST;
		return $_GET;
	}
}