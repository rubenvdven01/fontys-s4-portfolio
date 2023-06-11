// Function that returns the animation frame of browser
window.requestAnimFrame = (function () {
    return (
        window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function (callback) {
            window.setTimeout(callback, 1000 / 60);
        }
    );
})();

const wrapSlider = document.getElementsByClassName("project-carousel__wrapper")[0];
const widthWrap = wrapSlider.offsetWidth;

let items;
let sliders;
let sliderList = [];

const getSliderList = () => {
    sliders = document.getElementsByClassName("project-carousel");

    // get the dom elements in a array to better use it
    sliderList = [...sliders];
};

// Made a function for update later
getSliderList();

const slider = document.getElementsByClassName("project-carousel")[0];
const sliderWidth = slider.offsetWidth;

const sumIsLargerThanSlider = sliderWidth >= widthWrap + sliderWidth;

const iterationItems = Math.ceil((widthWrap + sliderWidth) / sliderWidth);

// we clone number of slider we need
if (iterationItems > 1) {
    for (let i = 0; i < iterationItems - 1; i++) {
        const clone = slider.cloneNode(true);
        wrapSlider.appendChild(clone);
    }

    getSliderList();
}

// we create an array for knowing the state of each item
let stateList = sliderList.map((item, i) => {
    let pos = 0;
    let start = false;

    // here we allow the slide to start fully at left
    if (i < iterationItems - 1) {
        pos = -widthWrap + sliders[i].offsetWidth * i;
        start = true;

        sliders[i].style.transform = `translate(${pos}px, -50%)`;
    }

    return {
        pos,
        start
    };
});

// logic animation for sliding each item at a time
const translate = () => {
    for (let i = 0; i < sliderList.length; i++) {
        const slider = sliderList[i];
        const sliderWidth = slider.offsetWidth;
        const nextIndex = i != sliderList.length - 1 ? i + 1 : 0;
        let pos;

        // if slider should be in movement
        if (stateList[i].start) {
            stateList[i].pos -= 1;
            pos = stateList[i].pos;

            slider.style.transform = `translate(${pos}px, -50%)`;
        }

        const isComplete = pos <= -sliderWidth;
        const isOutSeen = pos <= -widthWrap - sliderWidth;

        // if the slider is fully on screen
        if (isComplete) {
            stateList[nextIndex].start = true;
        }
        // if the slider finished crossing the slider and has disappeared
        if (isOutSeen) {
            stateList[i].start = false;
            stateList[i].pos = 0;
        }
    }
};

function start() {
    translate();
    requestAnimFrame(start);
}

start();

// async function fontsReady() {
//     await document.fonts.ready;
// }

// fontsReady();

// const fps = (1000 / 60);

// projectsCarousel();
// eventixCarousel();

// function projectsCarousel () {
//     let projectCarousel = document.getElementsByClassName("project-carousel")[0];
//     let projectItems = projectCarousel.children;
//     let leftRemValue = 0;

//     setInterval(() => {
//         leftRemValue = Math.round((leftRemValue -  0.1) * 100) / 100;
//         projectItems[0].style.marginLeft = leftRemValue + "rem";
//     }, fps);
// }

// function eventixCarousel () {
//     let eventixCarouselLeftValue = 5;
//     const videoCarousel = document.getElementsByClassName("eventix-video__carousel")[0];
//     const outOfScreenWidth = (document.getElementsByClassName("eventix-video__wrapper")[0].offsetWidth) * -1 / 10;

//     setInterval(() => {
//         eventixCarouselLeftValue = Math.round((eventixCarouselLeftValue -  0.1) * 100) / 100;
//         videoCarousel.style.marginLeft = eventixCarouselLeftValue + "rem";

//         if (eventixCarouselLeftValue + 1.5 == outOfScreenWidth) {
//             videoCarousel.appendChild(videoCarousel.children[0]);
//             eventixCarouselLeftValue = 2;
//         }
//     }, fps);
// }