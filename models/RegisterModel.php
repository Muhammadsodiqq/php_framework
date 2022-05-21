<?php

/**User: TheCodeholic ...*/

namespace app\models;

use app\core\Controller;
use app\core\Request;

/**
 * Class RegisterModel
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\controllers;
 * 
 */

 class RegisterModel 
 {
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;
 }