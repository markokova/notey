<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css"/>
</head>
<body>
    <?php include('../header.php'); ?>

    <div class="note-container">
        <div class="note-card">
            <p class="note-date"><?php echo $_GET["dateModified"];?></p>
            <h2><?php echo $_GET["noteTitle"]; ?></h2>
            <p id="note-description"><?php echo $_GET["noteDescription"]?></p>
            <a href="../phpScripts/delete_note.php?noteId=<?php echo $_GET["noteId"]?>&category=<?php echo $_GET["category"]; ?>&categoryId=<?php echo $_GET["categoryId"];?>"><img src="https://cdn-icons-png.flaticon.com/512/3405/3405244.png" class="garbage-image"></a>
            <a href="../phpScripts/edit_note.php?noteId=<?php echo $_GET["noteId"] ?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Edit_icon_%28the_Noun_Project_30184%29.svg/1024px-Edit_icon_%28the_Noun_Project_30184%29.svg.png" class="garbage-image"></a>
        </div>
    </div>    
</body>
</html>