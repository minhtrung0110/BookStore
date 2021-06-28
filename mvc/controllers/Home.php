<?php
 class Home{
     
    function __construct(){

    }
    public function ShowNewProduct($a){
      echo "ShowProduct ".$a." :";

    }
    public function ShowBestSellingProduct($params1,$params2){
       echo "ShowBestSellingProduct ".$params1."= : =".$params2."";
        
    }
 }

?>