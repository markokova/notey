<?php

require_once("../config.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $conn = connectToDatabase();

    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $category = $_POST["category"];
    $categoryId = $_POST["categoryId"];
    $dateModified = date("Y-m-d H:i:s");

    $query = "UPDATE notes SET title=? , description=?, dateModified=? WHERE id=?";
    $statement = $conn->prepare($query);
    $statement->bind_param("ssss", $title, $description, $dateModified, $id);

    if($statement->execute()){
        if($conn->affected_rows > 0){
            header("Location: http://localhost:8000/pages/notes.php?category=$category&categoryId=$categoryId");
            exit();
        }else{

        }
    }
}