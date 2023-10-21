<?php

//include '../config.php';
require_once('../config.php');

$conn = connectToDatabase();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = uniqid();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $dateModified = date("d.m.Y");
    $categoryId = "fstcategory";

    $query = "INSERT INTO notes (Id, Title, description, dateModified, categoryId) VALUES (?, ?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $statement->bind_param("sssss", $id, $title, $description, $dateModified, $categoryId);

    if($statement->execute()){
        echo "Note saved successfully!";
    } else{
        echo "Error: " . $statement->error;
    }
}

$statement->close();
$conn->close();