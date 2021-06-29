<?php
 class Home extends Controller{
     
    function __construct(){

    }
    public function ShowNewProduct(){
      echo "a";
      echo  $this->GetModel("BookModel")->GetBooks();
      //echo $newproduct->GetBooks();
      
     


    }
    public function ShowBestSellingProduct($params1,$params2){
       echo "ShowBestSellingProduct ".$params1."= : =".$params2."";
        
    }
    public function Tong($A,$B){
       $book=$this->GetModel("BookModel");
      echo  "Tổng là: ".$book->TinhTong($A,$B);

    }
 }

