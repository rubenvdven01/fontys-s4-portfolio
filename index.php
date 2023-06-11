<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ruben van de Ven | Portfolio</title>

    <link rel="stylesheet" href="dist/css/stylesheet.css">
</head>
<body>
    <section class="hero">
        <div class="hero__shape hero__shape--triangle"></div>
        <div class="hero__shape hero__shape--circle"></div>
        <div class="hero__shape hero__shape--circle"></div>
        <div class="hero__shape hero__shape--rectangle"></div>

        <h1 class="h1">Ruben van de Ven</h1>
        <h2 class="h2">Strategic & creative developer with a focus on digital products</h2>

        <img src="dist/img/hero-image.jpg" alt="" class="hero__image">

        <div class="hamburger">
            <span class="hamburger__layer"></span>
            <span class="hamburger__layer"></span>
            <span class="hamburger__layer"></span>
        </div>
    </section>

    <section class="project-carousel__wrapper">
        <div class="project-carousel">
            <div class="project-carousel__item s2" style="background-color: #ffd3ed;">
                <video class="s2-video" autoplay loop muted>
                    <source src="dist/videos/s2-portfolio-preview.mp4" type="video/mp4">
                </video>
            </div>

            <div class="project-carousel__item" style="background-color: #c0e2fe;">
            <div class="eventix-video__carousel-slider">
                    <div class="eventix-video__carousel">
                        <div class="eventix-video__wrapper">
                            <video class="eventix-video" autoplay loop muted>
                                <source src="dist/videos/begin-eventix.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="eventix-video__wrapper">
                            <video class="eventix-video" autoplay loop muted>
                                <source src="dist/videos/date-eventix.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="eventix-video__wrapper">
                            <video class="eventix-video" autoplay loop muted>
                                <source src="dist/videos/ftt-eventix.mp4" type="video/mp4">
                            </video>
                        </div>

                        <div class="eventix-video__wrapper">
                            <video class="eventix-video" autoplay loop muted>
                                <source src="dist/videos/end-eventix.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
            </div>
            </div>

            <div class="project-carousel__item" style="background-color: #dedede;">
                <img class="rh-screencapture" src="dist/img/rh-screencapture.png" alt="">
                <img class="rh-phone" src="dist/img/rh-phone.png" alt="">
            </div>
            
            <div class="project-carousel__item" style="background-color: #FFC267;">
                <img class="hdn-laptop" src="dist/img/hdn-laptop.png" alt="">
            </div>

            <div class="project-carousel__item cbr" style="background-color: #88d5ff;">
                <div style="overflow: hidden;">
                    <img src="dist/img/cbr-screens.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="about-me">
        <svg viewBox="0 0 2260.721 4021.057" style="display: block; width: 70%; margin: -1rem auto 0;">
            <path style="transition: stroke-dashoffset .3s ease-out;" id="path" data-length="10615" d="M17032.428,5248.083s303.234-614.825,1053.488-614.825c797.234,0,647.725-758.648,647.725-758.648s-73.875-414.053-614.711-373.724-1416.809-109.572-1416.809-682.93,304.559-769.61,837.508-461.911,1209.449,352.554,1194.012-206.035-517-464.725-517-464.725-542.539,27.227-1184.209,47.163-525.084-500.464-525.084-500.464" transform="translate(-16491.555 -1230.343)" fill="none" stroke="#c0e2fe" stroke-width="25" stroke-dasharray="10615 10615" stroke-dashoffset="-10615" />
        </svg>
    </section>

    <script src="dist/js/main.js"></script>
    <script>
        const path = document.getElementById("path");
        const pathLength = path.dataset.length;

        window.onscroll = (e) => {
            const currentScroll = window.scrollY;
            const scrollHeight = document.body.offsetHeight - window.innerHeight;
            let scrollPercentage = (currentScroll / scrollHeight * 100).toFixed(0);

            path.style.strokeDashoffset = (pathLength * -1) + (pathLength / 100 * scrollPercentage);
        }
    </script>
</body>
</html>