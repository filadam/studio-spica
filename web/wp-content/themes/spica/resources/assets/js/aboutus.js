/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
//$('.about-us-container').click(function () {
//    $(".card-front").css("transform", "rotateY(-180deg)");
//    $(".card-back").css("transform", "rotateY(0deg)");
//})

$('.star-xl').hover(function () {
    $(this).css('z-index', '1000')
    $('.shining-star').css('box-shadow', '0 0 0 3000px #e6d6ff')
    $('.shining-star').css('transform', 'scale(1)')
    $('.shining-star').css('background-color', 'black')
}, function () {
    $(this).delay(600).queue(function (next) {
        $(this).css('z-index', 'unset');
        next();
    });
    $('.shining-star').css('box-shadow', '0 0 0 10px #e6d6ff');
    $('.shining-star').css('background-color', 'black');
    $('.shining-star').css('transform', 'scale(0.5)');
})

$('.star-md').hover(function () {
    $('.shining-star').css('box-shadow', '0 0 0 10px #e6d6ff');
})

$('.star-sm').hover(function () {
    $('.shining-star').css('transform', 'scale(0.5)')
    $('.shining-star').css('box-shadow', '0 0 0 0px #e6d6ff');
})