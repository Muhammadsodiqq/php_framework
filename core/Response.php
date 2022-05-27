<?php

/**User: @Muhammadsodiqq ...*/
namespace app\core;


/**
 * Class Application
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\core;

 */

class Response 
{
    public function setStatusCode(int $code) 
    {
        http_response_code($code);
    }
}