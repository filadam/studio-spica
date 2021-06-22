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

let title = document.querySelector('.img-title');
const onMouseMove = (e) => {
    let img = e.target.getBoundingClientRect();
    if (e.target.classList.contains('img-container')) {
        title.style.left = e.clientX - img.left + 'px';
        title.style.top = e.clientY - img.top + 'px';
        title.style.visibility = "visible";
    } else if (!e.target.classList.contains('img-container')) {
        title.style.visibility = "hidden";
    }
}
document.addEventListener('mousemove', onMouseMove);