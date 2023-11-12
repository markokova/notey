<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Note</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include('../header.php');?>
<h2 id="add-new-note-text">Add a new note</h2>
    <form action="/phpScripts/save_note.php" method="POST">
        <input type="hidden" name="categoryId" value="<?php echo $_GET["categoryId"]; ?>">
        <input type="hidden" name="category" value="<?php echo $_GET["category"]?>">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>