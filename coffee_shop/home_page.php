<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Coffee Shop</title>
        <meta charset="UTF-8" />
        <meta lang="en-US" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
<body>
    <?= include_once 'includes/nav.php' ?>
    <div class="header-container">
        <p class="title">Coffee Shop</p>
        <p class="subtitle">quality beans roasted to perfection.</p>
    </div>
    <div class="center-text">
        <p>Order freshly made coffee</p>
    </div>
    <img class="left-center-image" src="assets/latte-cup2.jpg" />
    <img class="right-center-image" src="assets/biscuit.jpg" />
</body>
</html>