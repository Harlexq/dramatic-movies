window.addEventListener('scroll', function () {
    const headerInner = document.querySelector('.header-inner');
    const headerHeight = 80;

    const scrollY = window.scrollY || window.pageYOffset;

    const newHeaderHeight = Math.max(headerHeight - scrollY, 60);

    headerInner.style.height = newHeaderHeight + 'px';
});