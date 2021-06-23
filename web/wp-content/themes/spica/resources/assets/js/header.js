/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// add class active
jQuery(function ($) {
    $('.navbar-toggler').click(function () {
        $('.navbar-toggler-icon').toggleClass('active');
    });
});

// Text on img with mousemove

let title = document.querySelector('.img-title');
let videoOverlay = document.querySelector('.video-mouse-overlay');
const onMouseMove = (e) => {
    let img = e.target.getBoundingClientRect();
    if (e.target.classList.contains('img-container')) {
        title.style.left = e.clientX - img.left + 'px';
        title.style.top = e.clientY - img.top + 'px';
        title.style.visibility = "visible";
    } else if (!e.target.classList.contains('img-container')) {
        title.style.visibility = "hidden";
    }
    if (e.target.classList.contains('overlay')) {
        videoOverlay.style.left = e.clientX - img.left + 'px';
        videoOverlay.style.top = e.clientY - img.top + 'px';
        videoOverlay.style.visibility = "visible";
    } else if (!e.target.classList.contains('overlay')) {
        videoOverlay.style.visibility = "hidden";
    }
};
$(".overlay").click(function () {
    $("html,body").animate({
        scrollTop: $(".img-container").offset().top
    }, 600);
}
)

//
//const onMouseClick = (e) => {
//    console.log(e.target.classList.contains('video-mouse-overlay'));
//    if (e.target.classList.contains('video-mouse-overlay')) {
//        target.style.backgroundColor = "red";
//    }
//}

document.addEventListener('mousemove', onMouseMove);

// star spinning animation

let deg = 0;
let toggler = document.querySelector('.navbar-toggler-icon');
let container = document.querySelector('.header-container');
let navContainer = document.querySelector('.header-nav');
let rotateAnimation = () => {
    if (!event.detail || event.detail == 1) {
        if (deg == 45) {
            let spin = () => {
                setTimeout(() => {
                    let x = deg;
                    toggler.style.transform = "rotate(" + x + "deg)";
                    container.style.top = "-100%";
                    navContainer.style.visibility = "hidden";
                    if (deg > 0) {
                        spin(--deg);
                    }
                })
            }
            spin();
        } else {
            let spin = () => {
                setTimeout(() => {
                    let x = deg;
                    toggler.style.transform = "rotate(" + x + "deg)";
                    container.style.top = 0;
                    container.style.visibility = "visible";
                    navContainer.style.visibility = "visible";
                    if (deg < 45) {
                        spin(++deg);
                    }
                })
            }
            spin();
        }
    }
};
$(document).ready(function () {
    $(".navbar-toggler-icon").click(rotateAnimation);
});

// change video playback rate

document.querySelector('video').playbackRate = 3.0;