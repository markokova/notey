<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <link rel="stylesheet", href="css/styles.css">
</head>
<body>
    <h1>Welcome to Notey</h1>

    <div class="card-container">
        <div class="card">
            <?php 
            include './phpScripts/get_categories.php';
            $categories = get_categories();
            ?>
            <?php foreach($categories as $category): ?> 
                <a href="pages/notes.php?category=<?php echo $category["title"]; ?>&categoryId=<?php echo $category["id"];?>">
                <img src="images/lightbulb.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h2><b><?php echo $category["title"]; ?></b></h2>
                    <p>A change in the world starts with an idea.</p>
                </div>
            </a>
            <?php endforeach ?>
                
        </div>
        
        <div class="card">
            <a href="pages/notes.php?category=Feelings">
                <img src="images/smiley.jpg" alt="Avatar" style="width:100%">
                <div class="container">
                    <h2><b>Feelings</b></h2>
                    <p>Write about your feelings here</p>
                </div>
            </a>
        </div>
            
        <div class="card">
            <a href="pages/notes.php?category=Memories">
                <img src="images/watch.gif" alt="Avatar" style="width:100%">
                <div class="container">
                    <h2><b>Memories</b></h2>
                    <p>Don't forget important memories, write them down</p>
                </div>
            </a>
        </div>
    </div>    
</body>
</html>