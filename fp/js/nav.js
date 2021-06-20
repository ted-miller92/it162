var menuButton = document.getElementById("menuButton");
var mobileMenu = document.getElementById("mobileMenu");
var mainContent = document.getElementById("mainContent");

function openMenu(){
    //show menu
    if (mobileMenu.classList.contains("visible")) {
        mobileMenu.classList.remove("visible");
    }else{
        mobileMenu.classList.add("visible");
    }
}
menuButton.addEventListener("click", openMenu);