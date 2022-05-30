<?php

/**User: TheCodeholic ...*/

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

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
        $User = new User();
        if($request->isPost()) {
            $User->loadData($request->getBody());
            
            
            if($User->validate() && $User->save()) {
                return "succes";
            }
            // echo '<pre>';
            // var_dump($User->errors);
            // echo '</pre>';
            // exit;
            return $this->render("register",[
                "model" => $User
            ]);
        }
        $this->setLayout("auth");
        return $this->render("register",[
            "model" => $User
        ]);
    }
 }