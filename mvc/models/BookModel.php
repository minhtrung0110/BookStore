<?php

class BookModel{


        
        public function getBooks(){
            return "Books";

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