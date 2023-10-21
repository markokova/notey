<?php
define("SERVER_NAME","localhost");
define("USERNAME","root");
define("PASSWORD", "");
define("DB_NAME", "notey");


function connectToDatabase(){
    $conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);   

    if($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }

    return $conn;
}


// $conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DB_NAME);   

// if($conn->connect_error){
//     die("Connection failed" . $conn->connect_error);
// }

// echo "Success!";