<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>

        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header-container">
            <h1>Welcome <?php echo $_SESSION['user_name']; ?></h1>
            <a href="home_page.php">Continue</a>
        </div>
    </body>
    </html>

    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>