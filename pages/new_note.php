<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Note</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h2>Add a new note</h2>
    <form action="/phpScripts/save_note.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>