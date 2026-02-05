/**
 * Navbar Auto-Hide on Scroll
 * Hides the navbar when scrolling down, shows it when scrolling up.
 */
document.addEventListener("DOMContentLoaded", function () {
    console.log("Navbar script initialized");
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');

    if (!navbar) {
        console.error("Navbar element not found");
        return;
    }

    window.addEventListener("scroll", function () {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop < 0) scrollTop = 0;

        const navbarHeight = navbar.offsetHeight;

        if (scrollTop > lastScrollTop && scrollTop > navbarHeight) {
            if (!navbar.classList.contains('navbar-hidden')) {
                navbar.classList.add('navbar-hidden');
            }
        } else if (scrollTop < lastScrollTop) {
            if (navbar.classList.contains('navbar-hidden')) {
                navbar.classList.remove('navbar-hidden');
            }
        }
        lastScrollTop = scrollTop;
    });
});
