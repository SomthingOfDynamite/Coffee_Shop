<?php
    session_start();
    include "db_conn.php";
    $sql = "SELECT product_name, category, price, url FROM products";
    $products = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
        <title>Coffee Products</title>
        <meta charset="UTF-8" />
        <meta lang="en-US" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
<body>
<?= include_once 'includes/nav.php' ?>
<div class="products">
        <p>Coffee Products</p>
        <div class="products-card-container">
            <?php
            // show all coffe products
            foreach ($products as $prod) {
                if ($prod["category"] === "Coffee") {
            ?>
                    <div class="products-card">
                    <img src=assets/<?= $prod['url'] ?> />
                    <h3><?= $prod['product_name'] ?></h3>
                    <h3><?= $prod['price'] ?>Ft</h3>
                </div>
                <?php
                }
            }
            ?>
        </div>
    </div>
</body>