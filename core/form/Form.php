<?php

/**User: TheCodeholic ...*/

namespace app\core\form;

use app\core\Model;
use app\models\User;
/**
 * Class Form
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\core;

 */

 class Form
 {
     public static function begin($action , $method)
     {
         echo sprintf('<form action="%s" method="%s">',$action,$method);
         return new Form();
     }

     public static function end()
     {
         echo "</form>";
     } 

     public function field(Model $model,$attribute)
     {
        return new Field($model,$attribute);
     }
 }