const TOP = document.getElementById('Top');

const HAMBURGER = document.querySelector('.hamburger');
var MENU = document.getElementById('menu');
const SIDENAV = document.querySelector('.sideNav');
const SIDEMENU = document.querySelector('.sideMenu');
const FORM = document.querySelector('.form');

//  SLOWLY SCROLL TOP IMAGE     ////////////////////////////////////////
window.addEventListener('scroll', function () {
    var offSetTop = window.pageYOffset;

    TOP.style.backgroundPositionY = (offSetTop * -0.3) + 'px';
});

//  FADE NAV BAR ON SCROLL      /////////////////////////////////////////
window.addEventListener('scroll', function () {
    //      Fade header background on scroll        ----->
    if (window.pageYOffset <= 80) {             //      full opacity
        MENU.style.color = '#2effb9';
        gsap.to('.sideNav', { opacity: 1, duration: 1 })
        gsap.to('#header', { opacity: 1, duration: 2 });
    }
    else {                                                       //      zero opacity
        MENU.style.color = '#ddd';
        gsap.to('.sideNav', { opacity: 0, duration: 1 });
        gsap.to('#header', { opacity: 0, duration: 2 });

    }
    //  Fade in form on scroll      ------------------------------------>
    if (window.pageYOffset >= 2200) {             //      full opacity
        gsap.to('.form', { opacity: 1, duration: 0.5 })
    }
    else {                                                          //      zero opacity
        gsap.to('.form', { opacity: 0, duration: 0.5 });
    }
});

//  TOGGLE HAMBURGER ACTIVE     //////////////////////////////////////////
HAMBURGER.addEventListener('click', function () {
    this.classList.toggle('isActive');
    SIDENAV.classList.toggle('isActive');
    SIDEMENU.classList.toggle('isActive');
});

//  TOGGLE MENU FONT ACTIVE     ////////////////////////////////////////////
MENU.addEventListener('click', function () {
    this.class = 'isActive';
});


//      FADE IN FORM ON SCROLL      ///////////////////////////////////////////
// window.onscroll = function () { scrollFunction() };

// function scrollFunction() {
//     if (document.body.scrollTop > 1700 || document.documentElement.scrollTop > 1700) {
//         document.getElementById("form").style.opacity = 0;
//     }
//     else {
//         document.getElementById("form").style.opacity = 1;
//     }
// }




















