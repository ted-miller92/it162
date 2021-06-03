var menuButton = document.getElementById("menuButton");
var mobileMenu = document.getElementById("mobileMenu");

function openMenu(){
    if (mobileMenu.classList.contains("visible")) {
        mobileMenu.classList.remove("visible");
    }else{
        mobileMenu.classList.add("visible");
    }
}

menuButton.addEventListener("click", openMenu);