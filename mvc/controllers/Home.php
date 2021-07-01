<?php
 class Home extends Controller{
     
    function __construct(){

    }
    public function ShowListBooks(){
       $listbooks=$this->GetModel("BookModel")->getListBooks();
       
       $listbooks_view=$this->GetView("NewProduct",
       ["infor"=>$listbooks]);


    }
    public function ShowNewProduct($number){
      //Gọi hàm GetModel trong controller để include file BookModel.php vào index.php
      $newbookmodel= $this->GetModel("BookModel");
      $cartnewbook= $newbookmodel->GetNewBook($number);

      //Gọi hàm GetView trong controller để include file NewProduct.php vào index.php
      $newbookview=$this->GetView("NewProduct",["1"=>$cartnewbook]);
      
     


    }
    public function ShowBestSellingProduct($params1,$params2){
       echo "ShowBestSellingProduct ".$params1."= : =".$params2."";
        
    }
    public function Tong($A,$B){
       $book=$this->GetModel("BookModel");
      echo  "Tổng là: ".$book->TinhTong($A,$B);

    }
 }

