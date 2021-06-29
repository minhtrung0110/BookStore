<?php

class Controller{


    function __construct(){

    }
    public function GetModel($name_model){
        
        require_once "./mvc/models/".$name_model.".php";
       // echo "./mvc/models/".$name_model.".php";
        return new $name_model;

    }
    public function GetView($name_view){

    }

}


?>