<?php
/**
 * Class responsible for valid URL routes
 *
 * @author Thalyson Alexandre Rodrigues de Sousa <tha.motog@gmail.com>
 * @link http://github.com/thalysonrodrigues
 *
 * @version 1.0
 * @package classes
 */

namespace app\classes;


use \Klein\Klein as Klein;


class Route extends Klein
{
    /**
     * @var array $validRoute validated routes
     */
    public static $validRoutes = [];

    /**
     * @param string $route    url route to be validated
     * @param mixed  $call     call to be invoked
     */
    public function get($route="*", $call=null) {
        
        self::$validRoutes[] = $route;

        if (is_string($call)) {

            $array = explode("@", $call);
            $controller = NAMESPACE_APP . DS . NAMESPACE_CONTROLLERS . DS . $array[0] . "Controller";
            $action = $array[1];

            parent::get($route, function($request, $response, $service, $app) use ($controller, $action) {
                $class = new $controller;
                $class->__loadVars($request, $response, $app);
                return $class->$action();
            });

        } else {
            parent::get($route, $call);
        } 
    }
}
