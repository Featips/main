function showResponsiveMenu() {
    var menu = document.getElementById("topnav_responsive_menu");
    var icon = document.getElementById("topnav_hamburger_icon");
    var root = document.getElementById("root");
    if (menu.className === "") {
        menu.className = "open";
        icon.className = "open";
        root.style.overflowY = "hidden";
    } else {
        menu.className = "";                    
        icon.className = "";
        root.style.overflowY = "";
    }
}

function showResponsiveAccountMenu() {
    var account = document.getElementById("my-account-items");
    var iconaccount = document.getElementById("my-account-icon-nav");
    if (account.className === "") {
        account.className = "open";
        iconaccount.className = "open";
    } else {
        account.className = "";                    
        iconaccount.className = "";
    }
}