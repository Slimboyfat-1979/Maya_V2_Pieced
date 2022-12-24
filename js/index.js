'use strict'

// ============For Mobile - toggle classes for menu and hamburger ===============
const hamburger = document.querySelector('.hamburger');
const mob_nav = document.querySelector('#mob-nav');


hamburger.addEventListener('click', function(){
    mob_nav.classList.toggle('active');
    hamburger.classList.toggle('active');
});



// =========Change Header to black on scroll =============
const header_nav = document.querySelector('#headerNav');

window.addEventListener('scroll', function(){
    let scrollValue = this.window.scrollY;
    console.log(scrollValue);

    if(scrollValue > 100) {
        header_nav.classList.add('sticky');

    }

    if(scrollValue < 100) {
        header_nav.classList.remove('sticky');
    }
});


// =========== Image for Home Page ===============
const image = document.querySelector('.home-image');


let images = ['acoustic.jpg', 'image-01.jpg', 'image-02.jpg', 'image-03.jpg'];
let number = 0;

const cycle = setInterval(function(){
    let randomImage = cycleNumber();
    image.style.background = "url(../assets/images/" + images[randomImage] + ")";
    image.style.backgroundSize = "cover";
    image.style.backgroundRepeat = "no-repeat";
    image.style.backgroundPosition = "center";
    image.style.backgroundAttachment = "fixed";

}, 2000)

const cycleNumber = function() {
    number++;
    if(number === 3){
        number = 0;
    }
    return number;
}

// Parralax Effect On Scroll

// const parallax = document.querySelector(".img");
// window.addEventListener('scroll', function(){
//     let offset = window.scrollY;
//     // console.log(offset);
//     parallax.style.backgroundPositionY = offset * 0.7 + "px";
// })
