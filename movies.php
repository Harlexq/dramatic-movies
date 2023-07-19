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
            <section class="movies">
                <div class="movies-inner">
                    <div class="page-title">
                        <h2>Movies</h2>
                    </div>
                    <div class="movies-content">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                        ?>
                            <a href="#" class="movies-item">
                                <img src="assets/img/mrrobot.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/aquaman.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/spiderman.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/whoamı.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/harryppoter.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/vforvandetta.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/hizliveofkeli.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                            <a href="#" class="movies-item">
                                <img src="assets/img/lucy.jpg" alt="">
                                <div class="favorite">
                                    <i class="fa-regular fa-heart"></i>
                                </div>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>