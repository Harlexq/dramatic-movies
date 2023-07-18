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
