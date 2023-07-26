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


    <div class="container">
        <div class="twshow">
            <div class="twshow-inner">
                <div class="twshow-content">
                    <div class="trailer">
                        <div class="trailer-title">
                            <h2>TRAILER</h2>
                        </div>
                        <div class="trailer-movies">
                            <a href="#">
                                <img src="assets/img/trailer.jpg" alt="">
                            </a>
                            <div class="trailer-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                    <path d="M2 2L14 10L2 18V2Z" fill="#5436A9" stroke="#5436A9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="actors">
                        <div class="actors-title">
                            <h2>CAST AND CREW INFO</h2>
                        </div>
                        <div class="actors-content">
                            <a href="#" class="actors-item">
                                <img src="assets/img/team/team1.jpg" alt="">
                                <p>Shoojit Sircar</p>
                                <span>Director</span>
                            </a>
                            <a href="#" class="actors-item">
                                <img src="assets/img/team/team2.jpg" alt="">
                                <p>Deepika Paduko...</p>
                                <span>As Piku</span>
                            </a>
                            <a href="#" class="actors-item">
                                <img src="assets/img/team/team3.jpg" alt="">
                                <p>Amitabh Bacchan</p>
                                <span>As Bhashkor Ba...</span>
                            </a>
                            <a href="#" class="actors-item">
                                <img src="assets/img/team/team4.jpg" alt="">
                                <p>Irrfan Khan</p>
                                <span>As Rana</span>
                            </a>
                            <a href="#" class="actors-item">
                                <img src="assets/img/team/team5.jpg" alt="">
                                <p>Moushumi Chat...</p>
                                <span>Choobhi Maasi</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="twshow">
            <div class="twshow-inner mt-50">
                <div class="trailer">
                    <div class="trailer-title">
                        <h2>MORE LIKE THIS</h2>
                    </div>
                    <div class="trailer-movies-content">
                        <div class="trailer-movies trailer-movies-show">
                            <a href="#">
                                <img src="assets/img/trailer/trailer1.jpg" alt="">
                            </a>
                            <div class="trailer-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                    <path d="M2 2L14 10L2 18V2Z" fill="#5436A9" stroke="#5436A9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="trailer-movies trailer-movies-show">
                            <a href="#">
                                <img src="assets/img/trailer/trailer2.jpg" alt="">
                            </a>
                            <div class="trailer-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                    <path d="M2 2L14 10L2 18V2Z" fill="#5436A9" stroke="#5436A9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="trailer-movies trailer-movies-show">
                            <a href="#">
                                <img src="assets/img/trailer/trailer3.jpg" alt="">
                            </a>
                            <div class="trailer-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                    <path d="M2 2L14 10L2 18V2Z" fill="#5436A9" stroke="#5436A9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="trailer-movies trailer-movies-show">
                            <a href="#">
                                <img src="assets/img/trailer/trailer4.jpg" alt="">
                            </a>
                            <div class="trailer-play">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
                                    <path d="M2 2L14 10L2 18V2Z" fill="#5436A9" stroke="#5436A9" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
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