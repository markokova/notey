<?php

//include '../config.php';
require_once('../config.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $conn = connectToDatabase();
    
    $id = uniqid();
    $title = $_POST['title'];
    $description = $_POST['description'];
    //$dateModified = date("d.m.Y");
    $dateModified = date("Y-m-d H:i:s");

    $outcome_message = "";

    if(isset($_POST["categoryId"])){

        $categoryId = $_POST["categoryId"];
        $category = $_POST["category"];
        
        $query = "INSERT INTO notes (Id, Title, description, dateModified, categoryId) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($query);
        $statement->bind_param("sssss", $id, $title, $description, $dateModified, $categoryId);
    
        if($statement->execute()){
            $statement->close();
            $conn->close();
            header("Location: ../pages/notes.php?category=$category&categoryId=$categoryId");
            exit(); // Terminate the current script to ensure the redirection takes effect
            
        } else{
            $outcome_message = "Error: " . $statement->error;
            $statement->close();
            $conn->close();
        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('../header.php');?>
    <p><?php echo $outcome_message?></p>
    <div>
        <a href="../pages/notes.php?categoryId=<?php echo $categoryId;?>&category=<?php echo $category;?>"><button class="button" type="button">OK</button></a>
    </div>
</body>
</html>

