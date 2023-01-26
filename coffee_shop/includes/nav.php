<nav class="navbar">
    <div class="link-container">
        <a>
            <img class="nav-logo" src="assets/coffeeshop-logo.png" />
        </a>
        <div class="links-right">
            <!-- Takes you to the main page-->
            <a href="home_page.php">Home Page</a>
            <!-- Takes you to the product page-->
            <a href="products.php">Products</a>
            <!-- Takes you to the login page-->
            <a href="logout.php">Log out</a>
            <!-- Takes you to the acount page-->
            <a href="acount_page.php"><?php echo $_SESSION['user_name']; ?></a>;
        </div>
    </div>
</nav>