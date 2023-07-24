<header class="header">
    <div class="header-inner">
        <div class="header-item">
            <a href="index.php" class="navbar-brand">
                <img src="assets/img/logo.png" alt="">
            </a>
            <menu class="navbar">
                <a href="index.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>">HOME</a>
                <a href="twshow.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'twshow.php') echo 'active'; ?>">TV SHOW</a>
                <a href="movies.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'movies.php') echo 'active'; ?>">MOVIES</a>
                <a href="new.php" class="navbar-item <?php if (basename($_SERVER['PHP_SELF']) == 'new.php') echo 'active'; ?>">NEW</a>
            </menu>
        </div>
        <div class="header-item-two">
            <menu class="navbar">
                <button type="button" class="navbar-btn"><i class="bi bi-gift"></i></button>
                <button type="button" class="navbar-btn"><i class="bi bi-bell"></i></button>
                <div class="bell-body">
                    <div class="bell-inner">
                        <div class="bell-title">
                            <p>Harlex</p>
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="bell-content">
                            <div class="bell">
                                <div class="bell-info">
                                    <img src="assets/img/bell/masaan.jpg" alt="">
                                    <div class="bell-info-text">
                                        <p>Masaan</p>
                                        <span>Masaan Released Watch Now</span>
                                    </div>
                                </div>
                                <div class="bell-delete">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bell-content">
                            <div class="bell">
                                <div class="bell-info">
                                    <img src="assets/img/bell/masaan.jpg" alt="">
                                    <div class="bell-info-text">
                                        <p>Masaan</p>
                                        <span>Masaan Released Watch Now</span>
                                    </div>
                                </div>
                                <div class="bell-delete">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bell-content">
                            <div class="bell">
                                <div class="bell-info">
                                    <img src="assets/img/bell/masaan.jpg" alt="">
                                    <div class="bell-info-text">
                                        <p>Masaan</p>
                                        <span>Masaan Released Watch Now</span>
                                    </div>
                                </div>
                                <div class="bell-delete">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bell-content">
                            <div class="bell">
                                <div class="bell-info">
                                    <img src="assets/img/bell/masaan.jpg" alt="">
                                    <div class="bell-info-text">
                                        <p>Masaan</p>
                                        <span>Masaan Released Watch Now</span>
                                    </div>
                                </div>
                                <div class="bell-delete">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <footer class="bell-footer">
                            <p>Tümünü Okundu Olarak İşaretle</p>
                        </footer>
                    </div>
                </div>
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