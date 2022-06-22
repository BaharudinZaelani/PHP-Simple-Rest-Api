<?php 
include "../init.php";
conn();

header('Content-type: application/json');
if ($_SERVER['REQUEST_METHOD'] == "GET"){
    // $result = [
    //     "status" => "success",
    //     "data" => json_encode(getBooks())
    // ]; 
    // return $result;

    echo json_encode(getBooks());
}