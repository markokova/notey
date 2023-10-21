<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php
        include "../phpScripts/get_notes.php";
        if(isset($_GET['category'])){
            $categoryName = $_GET['category'];
            $notes = get_notes();
            
        }
        else{
            $categoryName = "Notes";
        }
    ?>
    <h1><?php echo $categoryName?></h1>
    <div class="card-container">
        <?php foreach($notes as $note): ?>
        <div class="card">
            <h3><?php echo $note["title"] . "<br>" ?></h3>
            <p><?php echo $note["description"]; ?></p> 
        </div>
        <?php endforeach ?>
    </div>
    <a href="new_note.php"><button type="button">Add New Note</button></a>
</body>
</html>