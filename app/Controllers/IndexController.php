<?php
/**
 * Class responsible for controlling the home page
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Controllers
 */

namespace app\Controllers;


use app\Http\Controller;


class IndexController extends Controller
{
	function index() {
		$this->service->render("Index.phtml");
	}
}