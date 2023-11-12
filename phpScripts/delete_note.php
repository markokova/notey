<?php

require_once("../config.php");

$conn = connectToDatabase();
$noteId = $_GET["noteId"];
$category = $_GET["category"];
$categoryId = $_GET["categoryId"];

if(isset($noteId)){
    $query = "DELETE FROM notes WHERE id=?";
    $statement = $conn->prepare($query);
    $statement->bind_param("s",$noteId);

    if($statement->execute()){
        // $result = $statement->get_result();
        // echo $result;
        if($conn->affected_rows > 0){
            header("Location: ../pages/notes.php?category=$category&categoryId=$categoryId");
            exit();
        }
    }else{

    }
}