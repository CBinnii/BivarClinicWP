// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}
