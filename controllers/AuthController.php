<?php

/**User: TheCodeholic ...*/

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/**
 * Class AuthController
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\controllers;
 * 
 */

 class AuthController extends Controller 
 {
    public function login(Request $request) 
    {
        if($request->isPost()) {
            return "Handle submitted data";
        }
        $this->setLayout("auth");
        return $this->render("login");
    }

    public function register(Request $request) 
    {
        if($request->isPost()) {
            return "Handle submitted data";
        }
        $this->setLayout("auth");
        return $this->render("register");
    }
 }