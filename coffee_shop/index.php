<!DOCTYPE html>
<html>
<head>
    <img class="nav-logo" src="assets/coffeeshop-logo.png" />
    <meta charset="UTF-8" />
    <meta lang="en-US" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> LOGIN </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header-container">
        <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <!--type username that was already created -->
        <label> User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <!--type password to this acount -->
        <label>Password<lable>
        <input type="password" name="password" placeholder="Password"><br>
        <!-- if you havent created one, press register, this will take you to the 
        register page -->
        <a href="register_page.php">Register</a>
        <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>