/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
$('.loader-wrapper').delay(10).queue(function (next) {
    $(this).css('top', '-100%');
    next();
});
                

$('.exhaust-fumes').delay(10).queue(function (firstStep) {
    $(this).css('visibility', 'visible');
    firstStep();
})
