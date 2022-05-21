<?php

/**User: TheCodeholic ...*/

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

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
        $registerModel = new RegisterModel();
        if($request->isPost()) {
            $registerModel->loadData($request->getBody());
            echo '<pre>';
            var_dump($registerModel->errors);
            echo '</pre>';
            exit;
            if($registerModel->validate() && $registerModel->register()) {
                return "succes";
            }
            return $this->render("register",[
                "model" => $registerModel
            ]);
        }
        $this->setLayout("auth");
        return $this->render("register",[
            "model" => $registerModel
        ]);
    }
 }