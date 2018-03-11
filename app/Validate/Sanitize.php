<?php
/**
 * Class responsible for clearing requisition data
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Validate
 */

namespace app\Validate;


use app\classes\RequestData;


class Sanitize extends RequestData implements SanitizeInterface
{
	/**
	 * Sanitize the requisition
	 *
	 * @param Array $fields
	 *
	 * @return stdClass object
	 */
	public static function sanitize(array $fields = []) {
		$request = parent::request();

	    $sanitize = [];

	    foreach ($fields as $field => $type) {
	        switch ($type) {
	            case 's':
	                $sanitize[$field] = filter_var( $request[$field] , FILTER_SANITIZE_STRING );
	                break;
	            case 'i':
	                $sanitize[$field] = filter_var( $request[$field] , FILTER_SANITIZE_NUMBER_INT );
	                break;
	            case 'e':
	                $sanitize[$field] = filter_var( $request[$field] , FILTER_SANITIZE_EMAIL );
	                break;
	        }
	    }
	    return (object) $sanitize;
	} 
}