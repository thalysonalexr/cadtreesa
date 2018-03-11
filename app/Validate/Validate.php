<?php
/**
 * Class responsible for validating requisition data
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Validate
 */


namespace app\Validate;


use app\classes\RequestData;


abstract class Validate extends RequestData implements ValidateInterface
{
	/**
	 * Validate the requisition
	 *
	 * @param array $fields
	 *
	 * @return boolean      true or false
	 */
	public static function validate(array $fields = []) {
		$request = parent::request();

	    $validate = [];

	    foreach ($fields as $field => $type) {
	        switch ($type) {
	            case 's':
	                $validate[$field] = filter_var( $request[$field] );
	                break;
	            case 'i':
	                $validate[$field] = filter_var( $request[$field] , FILTER_VALIDATE_INT );
	                break;
	            case 'e':
	                $validate[$field] = filter_var( $request[$field] , FILTER_VALIDATE_EMAIL );
	                break;
	        }
	        if (!$validate[$field])
	        	return false;
	    }
	    return true;
	}

	/**
	 * Checks that all requisition fields are not empty
	 *
	 * @return boolean true or false
	 */
	public static function isEmpty() {
	    $request = parent::request();
	    $empty = false;

	    foreach ($request as $value) {
	        if (empty($value)) {
	            $empty = true;
	            break;
	        }
	    }
	    return $empty;
	}
}