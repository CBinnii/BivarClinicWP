// MENU
function menuMobile() {
    var menu = document.getElementById("menu-button");

    if (menu.classList.contains("cross")) {
        menu.classList.remove("cross");
    } else {
        menu.classList.add("cross");
    }
}

jQuery("#pestana_top img.show").click(function(e) {
    jQuery("#pestana_bottom").addClass("active"),
    jQuery(this).removeClass("show")
});
jQuery(".close_popup").click(function(e) {
    jQuery("#pestana_bottom").removeClass("active"),
    jQuery("#pestana_top img").addClass("show")
});