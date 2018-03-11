<?php
/**
 * Implementation interface for validate
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Validate
 */


namespace app\Validate;


interface ValidateInterface
{
	public static function validate(array $fields = []);
	public static function isEmpty();
}