<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightyear</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>


    <div class="container">
        <?php
        include('pages/common/nav.php');
        ?>
        <div class="main">
            <?php
            include('pages/common/header.php');
            ?>
            <section class="slider">
                <img src="assets/img/slider.jpg" alt="">
                <div class="slider-text">
                    <h2>Lightyear</h2>
                    <p>Adventure</p>
                </div>
            </section>
            <section class="movies">
                <div class="movies-inner">
                    <div class="movies-title">
                        <h2>Movies</h2>
                        <a href="movies.php">See all</a>
                    </div>
                    <div class="movies-content">
                        <a href="#" class="movies-item">
                            <img src="assets/img/mrrobot.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/aquaman.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/spiderman.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/whoamı.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/harryppoter.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/mrrobot.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/aquaman.jpg" alt="">
                        </a>
                        <a href="#" class="movies-item">
                            <img src="assets/img/spiderman.jpg" alt="">
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>