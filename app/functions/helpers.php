<?php
/**
 * Print a mexed and stop php
 * 
 * @param mixed all
 */
function dd($dump) {
	var_dump($dump);
	die();
}

/**
 * Converts an array to JSON format
 *
 * @param Array $array Array to be transformed
 */
function toJson(array $array) {
	header("Content-type: text/plain");
	echo json_encode($array , JSON_PRETTY_PRINT);
}

/**
 * Return to base url
 *
 * @return string URL url base
 */
function base_url() {
	$proto = strtolower(preg_replace("/[^a-zA-Z\s]/", '', $_SERVER["SERVER_PROTOCOL"]));
	$serve_name = $_SERVER["SERVER_NAME"];
	$port =$_SERVER["SERVER_PORT"] == "80" ? "" : ":".$_SERVER["SERVER_PORT"];
	$scriptname = str_replace("/index.php", "", $_SERVER["SCRIPT_NAME"]);
	return "{$proto}://{$serve_name}{$port}{$scriptname}";
}

/**
 * Returns the full path of assets
 *
 * @param string Active file path
 *
 * @return string Full path of active file for public
 */
function assets($file) {
	return base_url().ASSETS."{$file}";
}

/**
 * Return the current URL + URI
 *
 * @return string BASE URL + URI
 */
function currentUrl() {
	return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}