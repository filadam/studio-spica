/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(function ($) {
    /*Click on dark mode icon. Add dark mode classes and wrappers. 
     Store user preference through sessions*/
    $('.wpnm-button').click(function () {
        //Show either moon or sun
        $('.wpnm-button').toggleClass('active');
        //If dark mode is selected
        if ($('.wpnm-button').hasClass('active')) {
            //Add dark mode class to the body
            $('body').addClass('dark-mode');
            //Save user preference to Storage
            localStorage.setItem('darkMode', true);
        } else {
            $('body').removeClass('dark-mode');
            localStorage.removeItem('darkMode');
        }
    })
    //Check Storage. Display user preference 
    if (localStorage.getItem("darkMode")) {
        $('body').addClass('dark-mode');
        $('.wpnm-button').addClass('active');
    }
})

