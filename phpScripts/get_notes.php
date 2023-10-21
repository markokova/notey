<?php

include '../config.php';

function get_notes(){
    $conn = connectToDatabase();

    $category = $_GET['category'];
    
    $query = "SELECT * FROM notes WHERE categoryId = ?";
    //$query = "SELECT * FROM notes";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $category);


    if($statement->execute()){
        $statement->bind_result($id, $title, $description, $dateModified, $categoryId);

        $result = [];

        echo $category;

        while($statement->fetch()){
            $result[] = [
                'id' => $id,
                'title' => $title,
                'description' => $description,
                'dateModified' => $dateModified,
                'categoryId' => $categoryId
            ];
        }

        return $result;
    } 
    
    $conn->close();
    return false;
}




if($_SERVER['REQUEST_METHOD'] === 'GET'){
    
}