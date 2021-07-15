/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//create sky divs
const horizonWrapper = document.querySelector('.horizon-wrapper');
const horizon = document.querySelector('.horizon');
const sun = document.querySelector('.sun');
const earth = document.querySelector('.earth');

let w = horizon.clientWidth;
let s = 12
i = w % s;
i2 = w - i;
solution = i2 / s;
for (let i = 0; i < Math.floor(solution - 2); i++) {
    let div = document.createElement('div');
    div.className = 'sky';
    div.innerHTML = '',
            horizon.appendChild(div);
}
window.onload = () => {
    //gsap timeline animation
    const sky = document.querySelectorAll('.sky');
    const horizonSkyTimeline = gsap.timeline({
        scrollTrigger: {
            trigger: horizonWrapper,
            pin: true,
            pinSpacing: "margin",
            start: `${horizonWrapper.offsetHeight / 2}` + " 50%",
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
            .to(sun, {
                height: 0,
            })
            .to(("#sun-text"), {
                fontSize: 0,
            })
            .to(("#sun-icon"), {
                duration: 0,
                fontSize: 0,
            })
            .to(("#earth-text"), {
                fontSize: "16px",
                delay: 2,
                duration: 2,
            })
            .to(("#earth-icon"), {
                delay: 2,
                duration: 2,
                fontSize: "3.125rem",
            })
            .to(sky, {
                delay: 2,
                width: 10,
            })
            .to(earth, {
                delay: 2,
                height: 400,
            })
            .to(sky, {
                backgroundColor: "#25283cba"
            })
            .to(sky, {
                delay: 2,
                margin: 1,
            })
}