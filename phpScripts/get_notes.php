<?php

include '../config.php';

function get_notes(){
    $conn = connectToDatabase();

    $categoryId = $_GET['categoryId'];
    
    $query = "SELECT * FROM notes WHERE categoryId = ?";
    $statement = $conn->prepare($query);
    $statement->bind_param("s", $categoryId);



    if($statement->execute()){
        $statement->bind_result($id, $title, $description, $dateModified, $categoryId);
        //skontat kako da hvatam s fetch a ne s bind_result
        $result = [];

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