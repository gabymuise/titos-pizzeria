document.addEventListener("DOMContentLoaded", function() {
    var menuButton = document.getElementById("menu-button");
    var menuDropdown = document.getElementById("menu-dropdown");

    menuButton.addEventListener("click", function() {
        menuDropdown.classList.toggle("show");
    });

    window.addEventListener("click", function(event) {
        if (!event.target.matches("#menu-button")) {
            var menus = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < menus.length; i++) {
                var menu = menus[i];
                if (menu.classList.contains("show")) {
                    menu.classList.remove("show");
                }
            }
        }
    });
});