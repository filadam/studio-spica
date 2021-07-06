/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
gsap.registerPlugin(ScrollTrigger);
var el = document.querySelector('.intro');
gsap.registerPlugin(MotionPathPlugin)
const rx = window.innerWidth < 1000 ? window.innerWidth / 1200 : 1
const ry = window.innerHeight < 700 ? window.innerHeight / 1200 : 1
//const path = [
//    // 1
//    {x: 0, y: 600},
//    {x: 0, y: 500},
//    {x: 0, y: 400},
//    {x: 0, y: 300},
//    {x: 0, y: 200},
//    {x: 0, y: 100},
//    {x: 0, y: 0},
//];
//const scaledPath = path.map(({ x, y }) => {
//    return {
//        x: x * rx,
//        y: y * ry
//    };
//});
const sections = document.querySelector('.intro');
const rocket = document.querySelector('.rocket');
const rocketTrail = document.querySelector('.rocket-trail');

const tl = gsap.timeline({
    scrollTrigger: {
        start: 0,
        trigger: el,
        scrub: true,
        pin: true,
        pinSpacing: "margin",
        end: () => `+=${el.offsetHeight}`,
    },

})
        .from(rocket, {
            y: 1500,
        })
        .to(rocketTrail, {
//    motionPath: {
//        path: scaledPath,
//        align: 'self',
//        alignOrigin: [0.5, 0.5],
//    },
//            y: -1500,
//            scale: 1,
            opacity: 1,
        })
