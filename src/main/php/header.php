
<header>
    <section class="top-nav">
        <div class="brand-name">
            <a href="index.php"><h1>STAY FINDER</h1></a>
        </div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
            <div class='menu-button'></div>
        </label>
        <ul class="menu">
            <li><a href="help.php">Help</a></li>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true): ?>
                <li><a href="favorites.php">Favorites</a></li>
                <li><a href="logout.php">Log out</a></li>
            <?php else: ?>
                <li><a href="login.php">Log in</a></li>
            <?php endif; ?>
        </ul>
    </section>
</header>
