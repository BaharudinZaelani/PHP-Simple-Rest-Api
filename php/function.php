<?php 
$conn;

function conn(){
    global $conn;
    try {
        $conn = mysqli_connect("localhost", "root", "", "tugas_besar");
        header("HTTP/1.1 200 OK");
        return true;
    }catch( Exception $e ){
        echo $e;
        header("HTTP/1.0 500 Internal Server Error");
        return false;
    }
}


function getBooks(){
    global $conn;
    $query = "SELECT * FROM buku";
    $data = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($data)){
        $result[] = $row;
    }
    return $result;
}