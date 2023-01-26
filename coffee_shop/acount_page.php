<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title> YOUR ACOUNT </title>
    <meta charset="UTF-8" />    <meta lang="en-US" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?= include_once 'includes/nav.php' ?>
    <div class="header-container">
        <form action="update_acount.php" method="post">
        <a href="home_page.php">Back</a>
        <h2>UPDATE ACOUNT</h2>
        <h3>Acount Username: <?php echo $_SESSION['user_name']; ?></h3>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Update User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Update Password<lable>
        <input type="password" name="password" placeholder="Password"><br>
        <a href="confirm_delete.php">Delete</a>
        <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>