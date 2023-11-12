<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Note</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <?php include("../header.php")?>
    <h2 class="centered-title">Edit note</h2>
    <form action="/phpScripts/edit_note.php" method="POST">
        <input type="hidden" name="categoryId" value="<?php echo $_GET["categoryId"]; ?>">
        <input type="hidden" name="category" value="<?php echo $_GET["category"]?>">
        <input type="hidden" name="title" value="<?php echo $_GET["noteTitle"]?>">
        <input type="hidden" name="description" value="<?php echo $_GET["noteDescription"]?>">
        <input type="hidden" name="id" value="<?php echo $_GET["noteId"]?>">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required value="<?php echo $_GET["noteTitle"]?>"><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"><?php echo isset($_GET["noteDescription"]) ? $_GET["noteDescription"] : ''?></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>