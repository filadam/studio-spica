/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
import { SVG } from '@svgdotjs/svg.js'

        gsap.registerPlugin(ScrollTrigger, MotionPathPlugin);


//var rocketSVG = SVG().addTo('.rocket').size(300, 300)
//rocketSVG.path('m 106.51803,244.29133 1.8288,13.19459 5.46841,5.0726 3.37714,-13.60594 z')
//rocketSVG.path('m 116.82849,233.17608 13.29478,0.83326 5.46876,5.07224 -13.31489,4.38891 z')
//rocketSVG.path('m 123.30151,246.264 c -5.84235,-18.83304 -20.71088,-29.75963 -55.593543,-48.31186 21.117277,33.39254 33.129003,47.39922 52.346933,51.81177 z')
//rocketSVG.path('m 120.53802,249.24296 c -22.671616,-5.43454 -38.193838,-30.0549 -50.907949,-49.55222 16.471194,22.20489 32.288689,42.25607 51.635379,48.768 z')
//rocketSVG.path('M 122.81161,246.7921 C 115.50488,226.25514 97.688188,215.45767 69.630361,199.69062 93.546225,217.12702 108.77,231.63571 121.26539,248.45897 Z')
//rocketSVG.path('m 124.47488,246.77489 -3.82446,4.12291 -0.59549,-1.13382 3.24449,-3.4978 z')
//rocketSVG.path('m 115.45407,261.04965 -13.93402,-15.35042 16.35231,12.74304 z')
//rocketSVG.path('m 116.0587,260.39783 -14.53868,-14.69849 16.35266,12.74304 z')
//rocketSVG.path('m 116.0587,260.39783 -14.53868,-14.69849 15.27845,13.90086 z')
//rocketSVG.path('m 131.7916,243.43659 -13.93402,-15.35042 16.35231,12.74304 z')
//rocketSVG.path('m 132.39619,242.7848 -14.53832,-14.69849 16.3523,12.74304 z')
//rocketSVG.path('m 132.39619,242.7848 -14.53832,-14.69849 15.27809,13.90086 z')
//rocketSVG.path('m 96.8025,220.70877 c 1.478492,1.3716 1.8796,3.46922 1.165225,5.23381 1.640769,-1.78788 1.531055,-4.56741 -0.250472,-6.22018 -1.781528,-1.65241 -4.561417,-1.55328 -6.221589,0.21696 1.706033,-0.8449 3.827992,-0.60219 5.306836,0.76941')
//rocketSVG.path('m 92.610689,225.22789 c -1.478139,-1.37125 -1.8796,-3.46816 -1.165931,-5.2324 -1.621719,1.78894 -1.506713,4.55366 0.268464,6.20007 1.774825,1.64606 4.540603,1.55328 6.202539,-0.19756 -1.70568,0.8435 -3.826933,0.60114 -5.305072,-0.77011')
//rocketSVG.path('m 97.951603,225.961 c -0.01164,0.0127 -0.02399,0.0243 -0.03598,0.0367 0.0127,-0.006 0.0254,-0.0116 0.03775,-0.0176 0.0053,-0.0123 0.0095,-0.025 0.01446,-0.0374 -0.0056,0.006 -0.01058,0.0123 -0.01623,0.0183')
//rocketSVG.path('m 91.478625,219.9569 c 0.0056,-0.006 0.01164,-0.0116 0.01693,-0.0173 -0.01164,0.006 -0.02399,0.0109 -0.03563,0.0173 -0.0053,0.0127 -0.01023,0.0258 -0.01517,0.0385 0.01164,-0.0127 0.02223,-0.0257 0.03387,-0.0385')
//rocketSVG.path('m 97.967795,225.94276 c 0.714375,-1.76459 0.313267,-3.86221 -1.165225,-5.23381 -1.478844,-1.37195 -3.600803,-1.61431 -5.306836,-0.76941 -0.0056,0.006 -0.01129,0.0113 -0.01729,0.0173 -0.01164,0.0127 -0.02223,0.0258 -0.03387,0.0388 -0.713316,1.76424 -0.311855,3.8608 1.165931,5.2324 1.478491,1.3709 3.599391,1.61361 5.305425,0.76976 0.01164,-0.0123 0.02399,-0.024 0.03563,-0.0367 0.0056,-0.006 0.01058,-0.012 0.01623,-0.0183')
//rocketSVG.fill({color: '#f06', opacity: 0.6})
//rocketSVG.transform({
//
//})
const el = document.querySelector('.intro');
const rocket = document.querySelector('.rocket');
const rocketTrail = document.querySelector('.rocket-trail');
//const tls = gsap.timeline({
//    scrollTrigger: {
//        start: "top top",
//        trigger: ("body"),
//        scrub: 1,
////        pin: true,
////        pinSpacing: "margin",
//        end: "bottom bottom",
//        markers: true,
//    },
//
//})

//tls.to(('.intro'), {
//    rotate:270,
//})

const tl = gsap.timeline({
    scrollTrigger: {
        start: 1,
        trigger: el,
        scrub: 1,
        pin: true,
        pinSpacing: "margin",
        end: "+=1900",
//        markers: true,
    },

})
const tle = gsap.timeline({
    scrollTrigger: {
        start: 1,
        trigger: el,
        scrub: 1,
        pin: true,
        pinSpacing: "margin",
        end: "+=1900",
    },

})

const tli = gsap.timeline({
    scrollTrigger: {
        start: "center top",
        trigger: (".about"),
        scrub: 1,
//        pin: true,
//        pinSpacing: "margin",
        end: "bottom bottom",
        markers: true,
    },

})

ScrollTrigger.matchMedia({

    // large
    "(min-width: 1400px)": function () {
        tl.to(rocket, {
            scale: 0.7,
            motionPath: {
                path: "#path",
                align: "#path",
                autoRotate: 90,
//                alignOrigin: [0.5, 0.5],
            },
            rotation: () => self.direction === 1 ? 0 : -45,
        })
        tle.to(rocketTrail, {
            delay: 1,
            opacity: 1,
        })
        tli.to((".about"), {
            transition: "200ms",
//            duration: 0.1, 
//            y: -2000,
            scale: 0,
//            backgroundBlendMode: "luminosity",
        })
    },
});


