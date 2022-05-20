<?php

/**User: TheCodeholic ...*/

namespace app\core;
/**
 * Class Router
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\core;
 */

class Request 
{   
    public function getPath() 
    {
        $path = $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path,"?");

        if($position === false) {
            return $path;
        }
        $path = substr($path,0,$position);
        return $path;
    }

    public function getMethod() 
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }
}

