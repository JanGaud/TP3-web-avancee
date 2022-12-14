<?php

class ControllerHome{

    public function index(){

      $data =['name' =>'Janis', 
              'welcome' => 'Welcome'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }

    public function test(){

      $data =['name' =>'Janis', 
              'welcome' => 'Welcome'];
      twig::render("home-index.php", $data);

    }

}