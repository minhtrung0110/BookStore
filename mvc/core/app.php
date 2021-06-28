<?php

class App {
    #http://localhost/MVC/BookStore/BookStore/Home/Product/3
    #URL=Home/Product/3
    
    private $controller="Home";
    private $action="ShowNewProduct";
    private $params=[];

    function __construct(){
        $arr = $this->URLProceed();
       // print_r($arr);
        //Xu Ly Controller
       if(file_exists("./mvc/controllers/".$arr[0].".php")){
        $this->controller=$arr[0];
        unset($arr[0]);
       }
        require_once("./mvc/controllers/".$this->controller.".php");
        //Xu Ly action
        if(isset($arr[1])){
            if( method_exists($this->controller,$arr[1])){
                $this->action=$arr[1];
               
            }
            unset($arr[1]);
        }
        //Xu Ly Params
        $this->params=$arr?array_values($arr):[];
        // gọi làm Action trong Class của Controller với tham số truyền vào là mảng Params.
        call_user_func_array([$this->controller,$this->action],$this->params);
       /* echo $this->controller;
        echo "<br>";
        echo $this->action;
        echo "<br>";
        print_r($this->params);*/

       
    }
    function URLProceed(){
        if(isset($_GET['url'])){
            $url=filter_var(trim($_GET['url']));// xoá ký tự lạ, khoảng trắng
           return  explode("/",$url);

        }

    }
}

?>
