<?php
/**
 * Implementation interface for sanitizing
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Validate
 */

namespace app\Validate;


interface SanitizeInterface
{
	public static function sanitize(array $fields = []);
}