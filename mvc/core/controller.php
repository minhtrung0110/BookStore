<?php

class Controller{


    function __construct(){

    }
    public function GetModel($name_model){
        
        require_once "./mvc/models/".$name_model.".php";
        return new $name_model;

    }
    public function GetView($name_view,$data=[]){
             
        require_once "./mvc/views/".$name_view.".php";
       
    }

}


?>