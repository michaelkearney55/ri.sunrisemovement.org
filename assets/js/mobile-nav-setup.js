document.addEventListener("DOMContentLoaded", function () {
    'use strict';

    /* Set up mobile nav menu */
    var myTopnav = document.getElementById('my-topnav'),
        myHamburger = document.getElementById('my-hamburger');
    myHamburger.onclick = function () {
        if (myHamburger.classList.contains('transformed')) {
            myHamburger.classList.remove('transformed');
            myTopnav.classList.remove('transformed');
        } else {
            myHamburger.classList.add('transformed');
            myTopnav.classList.add('transformed');
        }
    };
});
