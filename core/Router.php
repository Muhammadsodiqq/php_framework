<?php

/**User: TheCodeholic ...*/

namespace app\core;

use app\core\Request;
/**
 * Class Router
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\core;
 */

class Router 
{   

    public Request $request;
    protected array $routes = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path,$callback)
    {
        $this->routes["get"][$path] = $callback;
    }

    public function resolve()
    {
        $this->request->getPath();
    }
}

