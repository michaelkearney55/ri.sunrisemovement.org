var myTopnav = document.getElementById('my-topnav');
var myHamburger = document.getElementById('my-hamburger');


myHamburger.onclick = function () {
    'use strict';
    if (myHamburger.classList.contains('transformed')) {
        myHamburger.classList.remove('transformed');
        myTopnav.classList.remove('transformed');
    } else {
        myHamburger.classList.add('transformed');
        myTopnav.classList.add('transformed');
    }
};

