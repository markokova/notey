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
                    <a href="./note.php?noteTitle=<?php echo $note["title"]?>&noteDescription=<?php echo $note["description"]?>&dateModified=<?php echo $note["dateModified"]?>&noteId=<?php echo $note["id"]?>&category=<?php echo $_GET["category"]; ?>&categoryId=<?php echo $_GET["categoryId"];?>">
                        <p class="note-date"><?php echo $note["dateModified"];?></p>
                        <h3><?php echo $note["title"] . "<br>" ?></h3>
                        <p class="note-description"><?php echo $note["description"]; ?></p>
                        <a href="../phpScripts/delete_note.php?noteId=<?php echo $note["id"]?>&category=<?php echo $_GET["category"]; ?>&categoryId=<?php echo $_GET["categoryId"];?>"><img src="https://cdn-icons-png.flaticon.com/512/3405/3405244.png" class="garbage-image"></a>
                        <a href="../phpScripts/edit_note.php?noteId=<?php echo $_note["id"] ?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Edit_icon_%28the_Noun_Project_30184%29.svg/1024px-Edit_icon_%28the_Noun_Project_30184%29.svg.png" class="garbage-image"></a>
                    </a>
                </div>
                
            <?php endforeach ?>
        <?php endif ?>
    </div>
</body>
</html>