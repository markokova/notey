<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div>
        <h2 class="text-title">Login</h2>
        <form action="../phpScripts/login.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <a href="./register_page.php" id="go-to-register-button"><p>Still don't have an account? Click here to create one.</p></a>
</body>
</html>