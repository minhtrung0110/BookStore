<?php
   



    while( $row_list_books=mysqli_fetch_array($data["infor"])){
        echo $row_list_books["title"];
        echo $row_list_books["author"];
        echo $row_list_books["price"];
    }

?>
				
