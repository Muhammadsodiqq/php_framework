<?php

/**User: TheCodeholic ...*/

namespace app\models;

use app\core\Controller;
use app\core\Model;
use app\core\Request;

/**
 * Class RegisterModel
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\controllers;
 * 
 */

 class RegisterModel  extends Model
 {

   public string $firstname;
   public string $lastname;
   public string $email;
   public string $password;
   public string $confirmpassword;

   public function register() 
   {
      echo "Creating new user";
   }

   public function rules()
   {
      return [
         "firstname" => [self::RULE_REQUIRED],
         "lastname" => [self::RULE_REQUIRED],
         "email" => [self::RULE_REQUIRED ,self::RULE_EMAIL],
         "password" => [self::RULE_REQUIRED,[self::RULE_MIN, "min" => 8], [self::RULE_MAX, "max" => 24]],
         "confirmpassword" => [self::RULE_REQUIRED,[self::RULE_MATCH, "match" => "password"]],
      ];
   }
 }