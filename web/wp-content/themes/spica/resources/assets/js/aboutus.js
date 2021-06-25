/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$('.about-us-container').click(function () {
    $(".card-front").css("transform", "rotateY(-180deg)");
    $(".card-back").css("transform", "rotateY(0deg)");
})