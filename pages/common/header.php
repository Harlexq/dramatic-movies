<header class="header">
    <div class="header-inner">
        <div class="header-item">
            <div class="navbar-brand">
                <img src="assets/img/logo.png" alt="">
            </div>
            <menu class="navbar">
                <a href="index.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">HOME</a>
                <a href="twshow.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'twshow.php') echo 'active'; ?>">TV SHOW</a>
                <a href="movies.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'movies.php') echo 'active'; ?>">MOVIES</a>
                <a href="new.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'new.php') echo 'active'; ?>">NEW</a>
            </menu>
        </div>
        <div class="header-item-two">
            <div class="navbar-search">
                <input type="text" placeholder="SEARCH">
            </div>
            <menu class="navbar">
                <button type="button" class="navbar-btn"><i class="bi bi-gift"></i></button>
                <button type="button" class="navbar-btn"><i class="bi bi-bell"></i></button>
                <button type="button" class="navbar-btn">
                    <img src="assets/img/SerhanBakir.jpg" alt="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <circle cx="7" cy="7" r="6" fill="#3BFF37" stroke="white" stroke-width="2" />
                    </svg>
                </button>
            </menu>
        </div>
    </div>
</header>