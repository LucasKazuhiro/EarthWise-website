var ul = document.querySelector('#box-menu-2 ul');
var menuBtn = document.querySelector('.menu-btn i');
let bodyOverflowMenu = document.querySelector("body");

function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
        bodyOverflowMenu.style.overflow = "visible";
    }else{
        ul.classList.add('open');
        bodyOverflowMenu.style.overflow = "hidden";
    }

    
}