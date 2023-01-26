<?php
    session_start();
    include "db_conn.php";
    $sql = "SELECT name, description, url FROM product_categorie";
    $categories = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<head>
        <title>Products</title>
        <meta charset="UTF-8" />
        <meta lang="en-US" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="style.css">    
    </head>
<body>
<?= include_once 'includes/nav.php' ?>
<div class="products">
        <p>Products</p>
        <div class="products-card-container">
            <?php
            // show all product types
            foreach ($categories as $cat) {
                if ($cat["name"] === "Coffee") {
                    ?>
                <div class="products-card">
                    <a href="coffee_selected.php">
                        <img src=assets/<?= $cat['url'] ?> />
                        <h3><?= $cat['name'] ?></h3>
                        <h3><?= $cat['description'] ?></h3>
                    </a>
                </div>
            <?php
                } else if ($cat["name"] === "Pastry") {
                    ?>
                     <div class="products-card">
                        <a href="pastry_selected.php">
                            <img src=assets/<?= $cat['url'] ?> />
                            <h3><?= $cat['name'] ?></h3>
                            <h3><?= $cat['description'] ?></h3>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</body>