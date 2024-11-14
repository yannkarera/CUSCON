document.addEventListener('DOMContentLoaded', function () {
    var menuToggle = document.querySelector('.menu-toggle');
    var menu = 
    document.querySelector('nav ul');

    menuToggle.addEventListener('click', function () {
        menu.classList.toggle('show');
    });
});