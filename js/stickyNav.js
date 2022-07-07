// Липкая навигация
window.onscroll = function () { stickyNav() };

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

// Добавление нового класса, который сделает навигацию липкой при достижении определенного уровня прокрутки
function stickyNav() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
}