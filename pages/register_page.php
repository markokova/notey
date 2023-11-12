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
        <h2 class="text-title">Registration</h2>
        <form action="../phpScripts/register.php" method="POST">
            <label for="email">Email:</label>
            <input type="text" id="email" required>
            <label for="password">Password:</label>
            <input type="text" id="password" required>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>