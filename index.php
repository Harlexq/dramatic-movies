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
            <img src="assets/img/movie-wallpaper.jpg" alt="">
            <div class="slider-content">
                <img src="assets/img/slider.png" alt="">
                <p class="slider-desc">Ved and Tara fall in love while on a holiday in Corsica and decide to keep their real identities undisclosed. Tara returns to Delhi and meets a new Ved, who is trying to discover his true self.</p>
                <span>GENRES</span>
                <p>Action, Drama</p>
                <div class="slider-btn">
                    <button type="button">WATCH <i class="fa-solid fa-play"></i></button>
                    <button type="button" class="slider-btn-gray">MY LIST <i class="fa-solid fa-plus"></i></button>
                </div>
                <div class="slider-info">
                    <img src="assets/img/imdb.png" alt="">
                    <p class="slider-movie-yellow">7,6</p>
                    <p class="slider-movie-text">U/A</p>
                    <p class="slider-movie-text">4K</p>
                    <p class="slider-movie-history">2001</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="watch">
            <div class="watch-inner">
                <div class="watch-title">
                    <h2>MOVIES YOU MUST WATCH</h2>
                    <div class="filter-btn-content">
                        <button class="filter-btn" type="button">FILTERS <i class="fa-solid fa-angle-down"></i></button>
                        <div class="filters">
                            <div class="filters-inner">
                                <button type="button" class="filters-item">Fear</button>
                                <button type="button" class="filters-item">Comedy</button>
                                <button type="button" class="filters-item">Action</button>
                                <button type="button" class="filters-item">Science Fiction</button>
                                <button type="button" class="filters-item">Romantic</button>
                                <button type="button" class="filters-item">Local</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="watch-movies">
                    <div class="watch-movies-inner">
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/kumbalangi-nights.jpg" alt="">
                            </div>
                            <h3>Kumbalangi Nights</h3>
                            <span>2019</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.6</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/lunchbox.jpg" alt="">
                            </div>
                            <h3>The Lunchbox</h3>
                            <span>2013</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.7</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/haider.jpg" alt="">
                            </div>
                            <h3>Haider</h3>
                            <span>2014</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.4</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/aamis.jpg" alt="">
                            </div>
                            <h3>Aamis</h3>
                            <span>2019</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.0</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/court.jpg" alt="">
                            </div>
                            <h3>Court</h3>
                            <span>2014</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.6</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/masaan.jpg" alt="">
                            </div>
                            <h3>Masaan</h3>
                            <span>2015</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.1</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/transformers.jpg" alt="">
                            </div>
                            <h3>Transformers</h3>
                            <span>2007</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.10</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="watch">
            <div class="watch-inner">
                <div class="watch-title">
                    <h2>RECOMMENDED FOR YOU</h2>
                </div>
                <div class="watch-filter">
                    <button type="button" class="watch-filter-item active">Hindi</button>
                    <button type="button" class="watch-filter-item">Bengali</button>
                    <button type="button" class="watch-filter-item">Marathi</button>
                    <button type="button" class="watch-filter-item">Assamese</button>
                    <button type="button" class="watch-filter-item">Telugu</button>
                    <button type="button" class="watch-filter-item active">Tamil</button>
                    <button type="button" class="watch-filter-item">Malayalam</button>
                </div>
                <div class="watch-movies">
                    <div class="watch-movies-inner">
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/kumbalangi-nights.jpg" alt="">
                            </div>
                            <h3>96</h3>
                            <span>2018</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.6</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/lunchbox.jpg" alt="">
                            </div>
                            <h3>Swades</h3>
                            <span>2004</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.2</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/haider.jpg" alt="">
                            </div>
                            <h3>Andhadhun</h3>
                            <span>2018</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.2</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/aamis.jpg" alt="">
                            </div>
                            <h3>Sarpatta Paramba...</h3>
                            <span>2021</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.8</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/court.jpg" alt="">
                            </div>
                            <h3>Piku</h3>
                            <span>2015</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.6</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/masaan.jpg" alt="">
                            </div>
                            <h3>Hotel Mumbai</h3>
                            <span>2018</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.6 </p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/transformers.jpg" alt="">
                            </div>
                            <h3>Transformers</h3>
                            <span>2007</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.10</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="watch">
            <div class="watch-inner">
                <div class="watch-title">
                    <h2>BOLLYWOOD CLASSICS</h2>
                </div>
                <div class="watch-movies">
                    <div class="watch-movies-inner">
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/kumbalangi-nights.jpg" alt="">
                            </div>
                            <h3>Dil Chahta Hai</h3>
                            <span>2001</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.1</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/haider.jpg" alt="">
                            </div>
                            <h3>3 Idiots</h3>
                            <span>2009</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.5</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/aamis.jpg" alt="">
                            </div>
                            <h3>Rockstar</h3>
                            <span>2011</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.8 </p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/court.jpg" alt="">
                            </div>
                            <h3>Jaane Tu... Ya Jaa...</h3>
                            <span>2008</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.4</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/masaan.jpg" alt="">
                            </div>
                            <h3>Dilwale Dulhaniya...</h3>
                            <span>1995</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.2</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/transformers.jpg" alt="">
                            </div>
                            <h3>My Name is Khan</h3>
                            <span>2010</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>8.0</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="watch-movies-item">
                            <div class="movies-img-body">
                                <img class="movies-img" src="assets/img/movies/lunchbox.jpg" alt="">
                            </div>
                            <h3>The Lunchbox</h3>
                            <span>2013</span>
                            <div class="movies-info">
                                <div class="movies-signature">
                                    <img src="assets/img/imdb.png" alt="">
                                    <p>7.7</p>
                                </div>
                                <div class="movies-intr">
                                    <i class="fa-regular fa-eye"></i>
                                    <i class="active fa-solid fa-heart"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="showmore">
            <button type="button" class="showmore-btn">Show More <i class="fa-solid fa-angle-down"></i></button>
        </div>
    </div>

    <?php
    include('pages/common/footer.php');
    ?>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>