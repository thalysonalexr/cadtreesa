<?php
/**
 * Class responsible for creating views
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package Controllers
 */

namespace app\Http;


use Klein\ServiceProvider;


class View extends ServiceProvider
{
	public function render($view, array $data = []) {
		parent::render(ROOT . DS . NAMESPACE_APP . DS . NAMESPACE_VIEWS . DS . $view, $data);
	}
}