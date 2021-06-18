/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function ($) {
    $('.navbar-toggler').click(function () {
        $('.header-container, .navbar-toggler-icon').toggleClass('active');
    });
});

//jQuert(function ($) {
//    var colors = ['red', 'green', 'blue', 'orange']
//    $('.site-logo').css('color', function () {
//        return colors[Math.floor(Math.random() * colors.lenght)];
//    });
//
//})

//var colors = ['to right top, #051937, #A8EB12'];
//var logo = document.querySelector('.site-logo');
//
//
//logo.style.background = "-webkit-linear-gradient(" + colors[Math.floor(Math.random() * colors.length)] + ")";
//$('.site-logo').css("-webkit-background-clip", "text");
//$('.site-logo').css("-webkit-text-fill-color", "transparent");

let circle = document.querySelector('.img-title');
const onMouseMove = (e) => {
    circle.style.left = e.pageX + 'px';
    circle.style.top = e.pageY + 'px';
}
document.addEventListener('mousemove', onMouseMove);