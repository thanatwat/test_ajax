<?php
include("conn.php");
include("query.php");


$status = $_POST["status"];

if($status=="show_list"){
    //do query
     $select = "SELECT someting FROM sometable WHERE somewhere ";
     $row = getDetail($select, 1);
     if (!empty($row)) {
       foreach ($row as $item) {
            //output
        }
     }
}

if($status=="addnew"){
    //do add new
    $insert = "";
    Update($insert, 1);
}