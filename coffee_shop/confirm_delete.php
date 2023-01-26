<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html>
    <head>

        <title>CONFIRM DELETE</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header-container">
            <h1>Are you sure you would like to Delete your acount?</h1>
            <a href="home_page.php">Cancel</a>
            <a href="delete_acount.php">Delete</a>
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