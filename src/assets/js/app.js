import $ from 'jquery';
import whatInput from 'what-input';
import * as basicScroll from 'basicscroll';
import * as ScrollMagic from 'scrollmagic';
import { TweenMax, Power2, TimelineLite } from "gsap/umd/TweenMax"; 
import ScrollToPlugin from "gsap/umd/ScrollToPlugin"; 
import Draggable from "gsap/umd/Draggable";

//import pagepiling from "./lib/jquery.pagepiling.min.js";
import pagepiling from "../../../bower_components/pagePiling.js/dist/jquery.pagepiling.min"
import Foundation from 'foundation-sites';

window.$ = $;

/* --- Determine scroll position --*/
/* Useless when using Page Piling --*/
/* function amountscrolled(){
    var winheight = $(window).height()
    var docheight = $(document).height()
    var scrollTop = $(window).scrollTop()
    var trackLength = docheight - winheight
    var pctScrolled = Math.floor(scrollTop/trackLength * 100) // gets percentage scrolled (ie: 80 NaN if tracklength == 0)
    console.log(pctScrolled + '% scrolled')
}

$(window).on("scroll", function(){
    amountscrolled();
})
 */



// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

$(document).foundation();

/* const easeBoxes = []

// Create an animation for each ease box. Each with a different timing.
document.querySelectorAll('.easeBox').forEach((elem, i) => {

  // Get the timing from the data attribute.
  // You can also hard-code the timing, but for the demo it's easier this way.
  const timing = elem.getAttribute('data-timing')

  // Create an instance for the current element and store the instance in an array.
  // We start the animation later using the instances from the array.
  easeBoxes.push(basicScroll.create({
    elem: elem,
    from: 'middle-bottom',
    to: 'bottom-top',
    direct: true,
    props: {
      '--ty': {
        from: '0',
        to: '100px',
        timing: timing
      }
    }
  }))

})

const rotateBox = basicScroll.create({
  elem: document.querySelector('.rotateBox'),
  from: 'top-middle',
  to: 'top-top',
  props: {
    '--r': {
      from: '0',
      to: '1turn'
    }
  }
})

const fadeBox = basicScroll.create({
  elem: document.querySelector('.fadeBox'),
  from: 'bottom-bottom',
  to: 'top-middle',
  inside: (instance, percentage, props) => console.log('fadeBox is animating'),
  outside: (instance, percentage, props) => console.log('fadeBox is not animating'),
  props: {
    '--o': {
      from: .01,
      to: .99
    }
  }
})

const referenceBox = basicScroll.create({
  elem: document.querySelector('.referenceBox'),
  from: 'bottom-bottom',
  to: 'top-top',
  direct: document.querySelector('.directBox'),
  props: {
    '--o': {
      from: .01,
      to: .99
    }
  }
})
 */

$(document).ready(function() {
    
    $('#pagepiling').pagepiling({
        menu: null,
        direction: 'vertical',
        verticalCentered: false,
        sectionsColor: ['white', 'white', 'white', 'white', 'white'],
        anchors: [],
        scrollingSpeed: 700,
        easing: 'swing',
        loopBottom: false,
        loopTop: false,
        css3: true,
        navigation: {
            'textColor': '#fff',
            'bulletsColor': '#fff',
            'position': 'right',
            'backgroundColor': 'pink',
            'tooltips': ['The first section', 'The second section', 'The third section', 'The fourth section', 'The fifth section']
        },
       	normalScrollElements: null,
        normalScrollElementTouchThreshold: 5,
        touchSensitivity: 5,
        keyboardScrolling: true,
        sectionSelector: '.section',
        animateAnchor: false,

		//events
		onLeave: function(index, nextIndex, direction){},
		afterLoad: function(anchorLink, index){},
		afterRender: function(){
            /* rotateBox.start()
            fadeBox.start()
            referenceBox.start()
            easeBoxes.forEach((easeBox) => easeBox.start()) */
        },
	});
});


// init controller
//var controller = new ScrollMagic.Controller();

// create a scene
/* new ScrollMagic.Scene({
	duration: 100,	// the scene should last for a scroll distance of 100px
	offset: 50	// start this scene after scrolling for 50px
})
.setPin("#my-sticky-element") // pins the element for the the scene's duration
.addTo(controller); // assign the scene to the controller
 */

console.clear();
const threshold = 0.7; // trigger

const options = {
  root: null,
  rootMargin: '0px',
  threshold: threshold
};

const observer = new IntersectionObserver(animHandler, options);
const targets = document.querySelectorAll(".content");
const ar = [].slice.call(targets); 
let animations = [];

let count = 0;

for (let target of ar) {
  animations[count] = new TimelineMax({paused:true});  
  observer.observe(target);
  count++;
}

TweenMax.set(".dog", {yPercent:-50, xPercent:-100});
TweenMax.set(".box, .hello", {yPercent:-50, xPercent:-50});
TweenMax.set(".trigger", {bottom:threshold * 100 + "%"});

// timeline for each section
animations[0].from(".hello", 1, {scale:0, transformOrigin:"center bottom"});

/* let mySplitText = new SplitText(".message", {type:"chars, words, lines"});
animations[1].staggerFrom(mySplitText.chars, 0.2, {y: -50, rotation:180, opacity: 0}, 0.05); */

animations[2].to(".dog", 0.5, {left:"50%", xPercent:-50, ease:Back.easeOut.config(1.4)});
animations[2].from(".woof", 0.22, {scale:0, transformOrigin:"left bottom", ease:Back.easeOut.config(1.4)}, "-=0.1");

animations[3].to(".box", 0.5, {rotation:360});
animations[3].to(".box", 0.5, {top:"50%", width:300, backgroundColor:"white", color:"black"});

/* animations[4].to("#star", 0.3, {morphSVG:"#circle", ease:Back.easeOut.config(1.7)});
animations[4].to("#star", 0.3, {morphSVG:"#triangle", ease:Back.easeOut.config(1.7)}, "+=0.5");
animations[4].to("#star", 0.3, {morphSVG:"#star", ease:Back.easeOut.config(1.7)}, "+=0.5"); 

animations[5].staggerFromTo("#drawIt path", 1, {drawSVG:0}, {drawSVG:true},0.1);
animations[5].staggerTo("#drawIt path", 0.5, {fill:'white'}, 0.1, 0.5);*/

// observer handler
function animHandler(targets, observer) {
  for (var entry of targets) {
    if (entry.isIntersecting) {
      let i = ar.indexOf(entry.target);
      animations[i].play();
     
    } else {
        return;
    }
  }
}

