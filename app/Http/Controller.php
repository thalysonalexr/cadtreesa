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


abstract class Controller
{
    protected $request;
    protected $response;
    protected $service;
    protected $app;

    public function __loadVars($request, $response, $app) {
        $this->request = $request;
        $this->response = $response;
        $this->service = new View($request, $response);
        $this->app = $app;
    }
}