<?php
/**
 * Class responsible for controlling tree data
 *
 * @author Thalyson A. R. de Sousa <tha.motog@gmail.com>
 * @link https://github.com/thalysonrodrigues/
 *
 * @version 1.0
 * @package Controllers
 */

namespace app\Controllers;


use app\Http\Controller;


class TreeController extends Controller
{
	/**
	 * List the tree data
	 */
    public function list() {
    	$_REQUEST["tree"] = \app\Models\DAO\Tree::findOne($this->request->id);
    	$this->service->render("Tree.phtml");
    }
}
