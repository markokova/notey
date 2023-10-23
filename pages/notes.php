<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include('../header.php');?>
    <?php
        include "../phpScripts/get_notes.php";
        if(isset($_GET['categoryId'])){
            $categoryName = $_GET['category'];
            $notes = get_notes();
            
        }
        else{
            $categoryName = "Notes";
        }
    ?>
    <h1><?php echo $categoryName?></h1>
    <a href="new_note.php?categoryId=<?php echo $_GET["categoryId"]; ?>&category=<?php echo $categoryName?>"><button class="button" type="button">Add New Note</button></a>
    <div class="note-container">
        <?php if (empty($notes)): ?>
            <p>There are no notes in this category.</p>
        <?php else: ?>
            <?php foreach($notes as $note): ?>
                <div key="<?php echo $note["id"]?>" class="note-card">
                    <p class="note-date"><?php echo $note["dateModified"];?></p>
                    <h3><?php echo $note["title"] . "<br>" ?></h3>
                    <p><?php echo $note["description"]; ?></p> 
                </div>
            <?php endforeach ?>
        <?php endif ?>
    </div>
</body>
</html>