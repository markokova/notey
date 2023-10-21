<?php

include './config.php';

function get_categories(){
    $conn = connectToDatabase();

    $query = "SELECT * FROM categories";

    $statement = $conn->prepare($query);

    if($statement->execute()){

        $statement->bind_result($id, $title);

        while($statement->fetch()){
            $result[] = [
                "id" => $id,
                "title" => $title
            ];
        }

        return $result;
    }
}

