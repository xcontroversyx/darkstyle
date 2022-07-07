    /* Переключение между добавлением и удалением класса "отзывчивый" в topnav, когда пользователь нажимает на значок */
function responsiveNav() {
    var x = document.getElementById("navbar");
    if (x.className === "navbar") {
        x.className += " responsive";
    }
    else if (x.className === "navbar sticky") {
        x.className += " responsive";
    } else {
        x.className = "navbar";
    }
}