<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
    <link rel="stylesheet", href="css/styles.css">
</head>
<body>
    <?php include('header.php');?>
    <h1 id="welcome-message">Welcome to Notey</h1>
    <div class="card-container">
        <?php 
        include './phpScripts/get_categories.php';
        $categories = get_categories();
        ?>
        <?php foreach($categories as $category): ?>
            <div class="category-card"> 
                <a href="pages/notes.php?category=<?php echo $category["title"]; ?>&categoryId=<?php echo $category["id"];?>">
                    <img src="<?php echo $category["image"]?>" alt="Avatar">
                    <div class="container">
                        <h2><b><?php echo $category["title"]; ?></b></h2>
                        <p>A change in the world starts with an idea.</p>
                    </div>
                </a>
            </div>
        <?php endforeach ?> 
    </div>    
    <?php include('footer.php'); ?>
</body>
</html>