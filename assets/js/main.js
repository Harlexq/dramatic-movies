function Search() {
    const input = document.querySelector(".search input");
    if (window.innerWidth < 500) {
        if (input.style.display === "block") {
            input.style.display = "none";
            document.body.style.overflow = "auto";
        } else {
            input.style.display = "block";
            document.body.style.overflow = "hidden";
        }
    }
}

function Quit() {
    document.querySelector('.quit').classList.remove('show');
    document.body.style.overflow = 'auto';
    document.body.style.backgroundColor = '';
}

function Logout() {
    document.querySelector('.quit').classList.add('show');
    document.body.style.overflow = 'hidden';
    document.body.style.backgroundColor = 'black';
}

setInterval(function () {
    var moviesCarousel = document.querySelector('.movies-content');
    var moviesItems = moviesCarousel.getElementsByClassName('movies-item');

    for (var i = moviesItems.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        moviesCarousel.insertBefore(moviesItems[j], moviesItems[i]);
    }
}, 25000);
