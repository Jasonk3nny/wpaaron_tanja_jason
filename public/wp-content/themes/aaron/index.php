<!--
    TODO: – Add title
    – Add keywords & description
    - Run https://realfavicongenerator.net/ for favicons, tile & touchicons
    – Run https://realfavicongenerator.net/social for og image & info
    - Edit privacy info
    - Create E-mail-address datenschutz@
    – Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Site for Aaron Miller">
    <meta name="keywords" content="Choreographer">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aaron G. Miller | Choreographer</title>
    <link rel='stylesheet' href='./style.css'>
    <link rel="icon" type="image/svg+xml" href="images/upfav.svg">

</head>

<body>
    <header>
        <a href="/">
            <h1>Aaron G. Miller | <span style="font-weight: 300; text-transform: none;">Choreographer</span> </h1>
        </a>
        <nav id="mainnav">
            <button id="hamburger" class="closed">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <div class="line-3"></div>
            </button>
            <ul>
                <li><a href="#workshops">Workshops</a></li>
                <li><a href="#about">About Me</a></li>
                <li><a href="#news">News</a></li>
            </ul>
        </nav>
        <div class="believe">
            <h2>I believe you can dance.</h2>
            <a href="#" class="button">Book Workshop</a>
        </div>
    </header>

    <main>
        <section id="workshops">
            <p class="super-headline">Find your entrance level & book a workshop with Aaron</p>
            <h2>If you never start, you will never know.</h2>

            <div class="grid-wrapper">
                <div class="level-1">
                    <p class="number-desktop">3</p>
                    <div class="step-1-container">
                        <div class="icon-container">
                            <div><img class="icon" src="./images/stretch.svg"
                                alt='Icon showing dancer stretching her leg up to her nose.'></div>
                            <p class="number-mobile">3</p>
                        </div>
                        <div>
                            <h3>As pro as you can get</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim </p>
                            <a href="#" class="button">Book Workshop</a>
                        </div>
                        <div class="quote-1">
                            <img src="./images/quote.svg" alt='quote sign'>
                            <blockquote>Respect your talent!</blockquote>
                        </div>
                    </div>
                </div>
                <p class='apply-1'>Apply for an audition now!</p>

                <div class="level-2">
                    <p class="number-desktop">2</p>
                    <div class="step-2-container">
                        <div class="icon-container">
                            <div><img class="icon" src="./images/up.svg"
                                alt='Icon showing dancer stretching her leg up to her nose.'></div>
                            <p class="number-mobile">2</p>
                        </div>
                        <div>
                            <h3>Aspire more</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim</p>
                            <a href="#" class="button">Book Workshop</a>
                        </div>
                        <div class="quote-2">
                            <img src="./images/quote.svg" alt='quote sign'>
                            <blockquote>Thank <br> yourself for levelling up now!</blockquote>
                        </div>
                    </div>
                </div>
                <p class='apply-2'>Registration now open for everybody!</p>

                <div class="level-3">
                    <p class="number-desktop">1</p>
                    <div class="step-3-container">
                        <div class="icon-container">
                            <div><img class="icon" src="./images/rise.svg"
                                alt='Icon showing dancer stretching her leg up to her nose.'></div>
                        </div>
                        <p class="number-mobile">1</p>
                        <div>
                            <h3>Learn the basics profoundly</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et dolore magna aliqua. Ut enim ad minim</p>
                            <a href="#" class="button">Book Workshop</a>
                        </div>
                        <div class="quote-3">
                            <img src="./images/quote.svg" alt='quote sign'>
                            <blockquote>Fall in love with dancing!</blockquote>
                        </div>
                    </div>
                </div>
                <p class='apply-3'>Registration now open for everybody!</p>
            </div>

        </section>
        <section id="about">
            <img 
                sizes="(max-width: 643px) 100vw, 643px"
                srcset="
                ./images/aaron_w_200.png 200w,
                ./images/aaron_w_301.png 301w,
                ./images/aaron_w_387.png 387w,
                ./images/aaron_w_454.png 454w,
                ./images/aaron_w_512.png 512w,
                ./images/aaron_w_562.png 562w,
                ./images/aaron_w_614.png 614w,
                ./images/aaron_w_643.png 643w"
                src="./images/aaron_w_643.png"
                alt="This is me" />
            <div class="about-text">
                <p class="super-headline">Why I teach</p>
                <h2>Hi, I'm Aaron!</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae
                    autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur
                    asperiores consequatur consectetur ipsum!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae
                    autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur
                    asperiores consequatur consectetur ipsum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum!</p>
                <a class="button">Learn more</a> <!-- styled as button -->
            </div>
        </section>
        <section id="news">
            <p class="super-headline">Making waves since 2004</p>
            <h2>In the News</h2>
            <div class="flex-wrapper">
                <article>
                    <h3>Sydney Dance Festival 2022</h3>
                    <img 
                        sizes="(max-width: 1024px) 100vw, 1024px"
                        srcset="
                            ./images/dance_festival_performance_w_200.jpg 200w,
                            ./images/dance_festival_performance_w_683.jpg 683w,
                            ./images/dance_festival_performance_w_914.jpg 914w,
                            ./images/dance_festival_performance_w_1004.jpg 1004w,
                            ./images/dance_festival_performance_w_1024.jpg 1024w"
                        src="./images/dance_festival_performance_w_1024.jpg"
                        alt="Aaron performing at the Sydney dance festival 2022">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero
                        eos et accusam et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata sanctus est.
                    </p>
                    <a href="#" class="button">Read more</a>
                </article>

                <article>
                    <h3>"Dance Pool" 2023 sold out!</h3>
                    <img 
                    sizes="(max-width: 1024px) 100vw, 1024px"
                    srcset="
                        ./images/dance_pool_group_pic_w_200.jpg 200w,
                        ./images/dance_pool_group_pic_w_557.jpg 557w,
                        ./images/dance_pool_group_pic_w_781.jpg 781w,
                        ./images/dance_pool_group_pic_w_963.jpg 963w,
                        ./images/dance_pool_group_pic_w_1024.jpg 1024w"
                    src="./images/dance_pool_group_pic_w_1024.jpg" 
                    alt="Group picture of 'Dance Pool'">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero
                        eos et accusam et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata sanctus est.
                    </p>
                    <a href="#" class="button">Read more</a>
                </article>

                <article>
                    <h3>New London Workshop Oct. 2025</h3>
                    <img sizes="(max-width: 1024px) 100vw, 1024px"
                        srcset="
                            ./images/workshop_snapshot_w_200.jpg 200w,
                            ./images/workshop_snapshot_w_603.jpg 603w,
                            ./images/workshop_snapshot_w_812.jpg 812w,
                            ./images/workshop_snapshot_w_981.jpg 981w,
                            ./images/workshop_snapshot_w_1024.jpg 1024w"
                        src="./images/workshop_snapshot_w_1024.jpg" 
                        alt="Aaron at a workshop">
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                        sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore magna aliquyam erat, sed diam voluptua. At vero
                        eos et accusam et justo duo dolores et ea rebum. Stet
                        clita kasd gubergren, no sea takimata sanctus est.
                    </p>
                    <a href="#" class="button">Read more</a>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <h4>Thank you for your interest in Art!</h4>
        <p>© 2004 – 2023 Aaron G. Miller</p>
        <a href="#">Imprint & Privacy</a>
    </footer>
    <script src='./main.js'></script>
    <script>
        document.addEventListener("DOMContentLoaded", function (event) {
            // MainNav.init();
        });
    </script>
</body>

</html>