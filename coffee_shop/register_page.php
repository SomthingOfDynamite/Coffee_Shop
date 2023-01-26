<!DOCTYPE html>
<html>
<head>
    <img class="nav-logo" src="assets/coffeeshop-logo.png" />
    <meta charset="UTF-8" />
    <meta lang="en-US" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> REGISTER </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header-container">
        <form action="register.php" method="post">
        <h2>REGISTER</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label> User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password<lable>
        <input type="password" name="password" placeholder="Password"><br>
        <a href="index.php">Login</a>
        <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>