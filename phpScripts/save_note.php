<?php

//include '../config.php';
require_once('../config.php');

$conn = connectToDatabase();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
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
            //header("Location: ../pages/notes.php");
            $statement->close();
            $conn->close();
            //exit(); // Terminate the current script to ensure the redirection takes effect
            $outcome_message = "Note saved successfully!";
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

