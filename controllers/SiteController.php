<?php

/**User: TheCodeholic ...*/

namespace app\controllers;

use app\core\Controller;
use app\core\Request;

/**
 * Class SiteController
 * 
 * @author Muhammad <xolmuhammedovm@gmail.com>
 * @package  app\controllers;
 * 
 */

 class SiteController extends Controller
 {
    public function Home() 
    {
        $params = [
            "name" => "Muhammad",
        ];
        return  $this->render("home", $params);
    }

    public function Contact() 
    {
        return $this->render("contact");
    }

    public function handleContact(Request $request) 
    {
        $body = $request->getBody();
        echo "<pre>";
        var_dump($body);
        echo "</pre>";
        return 'Handling submitted data';
    }
 }