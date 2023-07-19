<aside class="aside">
    <nav class="nav">
        <div class="navbar-brand">
            <a href="index.php">
                <h1 class="logo"><i class="fa-solid fa-mug-hot"></i>GII</h1>
            </a>
        </div>
        <menu class="navbar">
            <a class="nav-item" href="index.php">
                <i class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?> fa-solid fa-house"></i>
                <p class="<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">Home</p>
            </a>
            <a class="nav-item" href="movies.php">
                <i class="<?php if (basename($_SERVER['PHP_SELF']) == 'movies.php') echo 'active'; ?> fa-solid fa-clapperboard"></i>
                <p class="<?php if (basename($_SERVER['PHP_SELF']) == 'movies.php') echo 'active'; ?>">Movies</p>
            </a>
            <a class="nav-item" href="trending.php">
                <i class="<?php if (basename($_SERVER['PHP_SELF']) == 'trending.php') echo 'active'; ?> fa-solid fa-chart-line"></i>
                <p class="<?php if (basename($_SERVER['PHP_SELF']) == 'trending.php') echo 'active'; ?>">Trending</p>
            </a>
            <a class="nav-item" href="favourite.php">
                <i class="<?php if (basename($_SERVER['PHP_SELF']) == 'favourite.php') echo 'active'; ?> fa-regular fa-heart"></i>
                <p class="<?php if (basename($_SERVER['PHP_SELF']) == 'favourite.php') echo 'active'; ?>">Favourite</p>
            </a>
        </menu>
        <menu class="navbar">
            <p>Account</p>
            <button type="button" class="nav-item">
                <i class="active fa-regular fa-user"></i>
                <p class="active">Harlex</p>
            </button>
        </menu>
    </nav>
    <div class="logout">
        <button onclick="Logout()" type="button" class="logout-btn"><i class="fa-solid fa-arrow-right-to-bracket"></i> Log Out</button>
    </div>
</aside>

<div class="quit">
    <div class="quit-inner">
        <div class="quit-title">
            <p>Harlex</p>
            <i onclick="Quit()" class="fa-solid fa-x"></i>
        </div>
        <div class="quit-body">
            <p>Heyy, Harlex Çıkış Yapmak İstediğine Emin Misin ?</p>
        </div>
        <div class="quit-footer">
            <button onclick="Quit()" type="button" class="quit-none-btn">İptal</button>
            <button onclick="Quit()" type="button" class="quit-logout-btn">Çıkış Yap</button>
        </div>
    </div>
</div>