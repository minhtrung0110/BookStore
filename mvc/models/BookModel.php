<?php

class BookModel extends ConnectionMySQL{


        
        public function getListBooks(){
           $sql= "Select * from books ";
           return mysqli_query($this->connection,$sql);

        }
        public function getNewBook($sl){
            $sum=$sl*125000;
            return "Nhớ Em Cô Gái Ngày Hôm Qua : 125.000 VNĐ 2020 : Giá tiền: ".$sum."VNĐ";
        }
        public function TinhTong($a,$b){
            return $a +$b;
        }

}


?>