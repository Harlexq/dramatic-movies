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
