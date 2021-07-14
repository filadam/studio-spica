/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
const horizon = document.querySelector('.horizon-wrapper')
const sky = document.querySelectorAll('.sky')
const planet = document.querySelector('.sun')
const horizonSkyTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: horizon,
        pin: true,
        pinSpacing: "margin",
        start: `${horizon.offsetHeight / 2}` + " 50%",
        end: "+=500 1%",
        scrub: true,
        markers: true,
    }
});

horizonSkyTimeline
        .to(sky, {
            duration: 10,
            margin: 0,

        })
        .to(sky, {
            width: 10
        })
        .to(planet, {
            backgroundColor: "lightblue"
        })
        .to(sky, {
            delay: 2,
            width: 10,
        })
        .to(sky, {
            backgroundColor: "#25283cba"
        })
        .to(sky, {
            delay:2,
            margin: 1,
        })
