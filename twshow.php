<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dramatic</title>
    <link rel="stylesheet" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php
    include('pages/common/header.php');
    include('pages/common/rectangle.php');
    ?>

    <div class="slider">
        <div class="slider-inner">
            <img src="assets/img/piku-wallpaper.jpg" alt="">
            <div class="slider-content">
                <img src="assets/img/piku.png" alt="">
                <p class="slider-desc">A road trip to Kolkata brings Piku, an architect, closer to her ageing but nagging father Bhaskor Banerjee despite their disparate ideologies and fights over trivial issues.</p>
                <span>GENRES</span>
                <p>Comedy, Drama</p>
                <div class="slider-btn">
                    <button type="button">WATCH <i class="fa-solid fa-play"></i></button>
                    <button type="button" class="slider-btn-gray">MY LIST <i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="slider-btn-rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7 10L12 15L17 10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 15V3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="slider-info">
                    <img src="assets/img/imdb.png" alt="">
                    <p class="slider-movie-yellow">7,6</p>
                    <p class="slider-movie-text">U/A</p>
                    <p class="slider-movie-text">4K</p>
                    <p class="slider-movie-history">2015</p>
                </div>
                <div class="slider-genres">
                    <span>AUDIO</span>
                    <p>English - Audio Description,English [Original]</p>
                    <span class="sub">SUBTITLES</span>
                    <p>English, Hindi</p>
                </div>
            </div>
        </div>
    </div>


    <?php
    include('pages/common/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>