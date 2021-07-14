/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
const introWrapper = document.querySelector('.intro-wrapper')
const intro = document.querySelector('.intro');
const rocket = document.querySelector('.rocket');
const rocketTrail = document.querySelector('.rocket-trail');
const moonBackground = document.querySelector('.moon-bg');

const introRocketTimeline = gsap.timeline({
    scrollTrigger: {
        trigger: intro,
        pin: true,
        pinSpacing: "margin",
        start: `${intro.offsetHeight / 2}` + " 50%",
        end: "+=750px 20%",
        scrub: 2,
    }
});

introRocketTimeline
        .to(rocket, {
            duration: 5,
            scale: 0.7,
            motionPath: {
                path: "#path",
                align: "#path",
                autoRotate: 90,
            },
            rotation: () => self.direction === 1 ? 0 : -45
        })
        .to(rocketTrail, {
            duration: 7,
            opacity: 1,
        })
        .to(moonBackground, {
            duration: 9,
            height: 350,
        });
