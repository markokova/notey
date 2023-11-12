<?php
require_once("../config.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = connectToDatabase();

    if(isset($email) and isset($password)){
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $statement = $conn->prepare($query);
        $statement->bind_param("ss", $email, $password);

        if($statement->execute()){
            $result = $statement->get_result();
            if($result->num_rows > 0){
                $statement->close();
                $conn->close();
                header("Location: ../index.php");
                exit();
            }else{
                $statement->close();
                $conn->close();
                header("Location: localhost:8000/pages/login_page.php");
                echo "wrong password";
                error_log("No such user in the DB./ wrong password");
                exit();
            }
        }
    }else{
        error_log("You have to enter email and password.");
    }
}