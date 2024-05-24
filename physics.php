
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="css/swiper-bundle.min.css">

        <!--=============== CSS ===============--> 
        <link rel="stylesheet" href="styles.css">

        <title>Geography Hub</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="" class="nav__logo-img">
                   Physics hub
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Intro</a>
                        </li>

                        <li class="nav__item">
                            <a href="#about" class="nav__link">Other</a>
                        </li>

                        <li class="nav__item">
                            <a href="#learn" class="nav__link">Learn</a>
                        </li>

                        <a href="#quiz" class="button button--ghost">Quizzes & Puzzles</a>
                        
                        <a href="create.php" class="button button--ghost">Create Virtual Reality</a>

                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>

                    <img src="assets/img/nav-img.png" alt="" class="nav__img">
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>

            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home container" id="home">
                <div class="swiper home-swiper">
                    <div class="swiper-wrapper">
                        <!-- HOME SLIDER 1 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
                                <div class="home__group">
                                    <img src="images/mechanics.jpeg" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">MECHANICS</h4>
                                        <span class="home__details-subtitle">Kinematics and Motors</span>
                                    </div>
                                </div>
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#1 MECHANICS</h3>
                                    <h1 class="home__title">GEOMETRY <br> OF MOTION!!</h1>
                                    <p class="home__description">Kinematics is the branch in Physics that describes the motion of points, bodies and system of bodies(groups of objects) without consideration of the causes of motion. It is the only directly measurable field of Physics.The types of kinematics include: 
                                        <li style="text-decoration: none;">
                                            <u>Displacement</u>

                                        </li>
                                        <li style="text-decoration: none;">
                                            <u>Velocity</u>
                                        </li>
                            
                                    <div class="home__buttons">
                                        <a href="#learn" class="button">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- HOME SLIDER 2 -->
                        <section class="swiper-slide">
                            <div class="home__content grid">
    
                                <div class="home__data">
                                    <h3 class="home__subtitle">#2 ELECTROMAGNETISM</h3>
                                    <h1 class="home__title">FEEL THE <br> PULL OF THRILL</h1>
                                    <p class="home__description">Electromagnetismm is referred to as the interaction between particles with electric charge via electromagnetic fields.Electric forces can cause an attraction between particles with opposite charges and repulsion between particles with the same charge
                                    </p>

                                    <div class="home__buttons">
                                        <a href="https://www.khanacademy.org/science/physics/electric-charge-electric-force" class="button">Learn more</a>
                                    </div>
                                </div>
                                <div class="home__group">
                                    <img src="images/electric.webp" alt="" class="home__img">
                                    <div class="home__indicator"></div>
    
                                    <div class="home__details-img">
                                        <h4 class="home__details-title">Electricity and Magnetism</h4>
                                        <span class="home__details-subtitle">Everything is an illusion</span>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

            <!--==================== ABOUT ====================-->
            <section class="section about" id="about">
                <h2 class="section__title">Other</h2>
                 <div class="category__container container grid">
                    <div class="category__data">
                        <img src="images" alt="" class="category__img">
                        <h3 class="category__title">Optics</h3>
                        <p class="category__description">Optics is the branch of physics that studies the behavior and properties of light. It encompasses the study of reflection, refraction, diffraction, interference, polarization, and the formation of images by lenses and mirrors.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/images/category2-img.png" alt="" class="category__img">
                        <h3 class="category__title">Thermodynamics</h3>
                        <p class="category__description">Thermodynamics is the branch of physics that deals with the study of heat, work, and energy transfer in physical systems.</p>
                    </div>

                    <div class="category__data">
                        <img src="assets/img/category3-img.png" alt="" class="category__img">
                        <h3 class="category__title">Waves</h3>
                        <p class="category__description">In physics, waves are disturbances that propagate through a medium or space, transferring energy without permanently displacing the medium itself. </p>
                    </div>
                </div>
            </section>

            <!--==================== TRICK OR TREAT ====================-->
            <section class="section trick" id="learn">
                <h2 class="section__title">Learn Physics</h2>

                <div class="trick__container container grid">
                    <div class="trick__content">
                        <img src="images/sound.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Sound waves and frequency</h3>
                        <span class="trick__subtitle">   <a href="https://www.georgeandjonathan.com/#5">Sound propagation</a></span>
                        <button class="button trick__button">
                         
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="images/power_plant.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Thermodynamic plant</h3>
                        <span class="trick__subtitle"><a href="https://threejs.org/examples/webgl_video_panorama_equirectangular.html">Tour</a></span>
                        <button class="button trick__button">
                            <i>   </i>
                        </button>
                    </div>

                    <div class="trick__content">
                        <img src="images/ripple.webp" alt="" class="trick__img">
                        <h3 class="trick__title">Waves and Oscillations</h3>
                        <span class="trick__subtitle"><a href="https://threejs.org/examples/webgl_points_waves.html">Ripple effect</a></span>
                    </div>

                </div>
            </section>
            


        
            <!--==================== OUR NEWSLETTER ====================-->
              <script src="physics.js"></script>
            <section class="section newsletter"  id="quiz">
                <div class="newsletter__container container"id="quiz-container">
                    <h2 class="section__title">Our Quizzes and puzzles</h2>
                    <p class="newsletter__description" >
                       Quizzes and puzzles directly to your inbox
                    </p>

                    <form id="quiz-form">
                    <p id="quiz-question">What is referred to as the maximum displacement of a particle?</p>
                    <div class="quiz-option">
                        <input type="radio" id="frequency" name="capital" value="Frequency">
                        <label for="frequency">Frequency</label>
                    </div>
                <div class="quiz-option">
                    <input type="radio" id="amplitude" name="capital" value="Amplitude">
                    <label for="amplitude">Amplitude</label>
                </div>
                <div class="quiz-option">
                    <input type="radio" id="wavelength" name="capital" value="Wavelength">
                    <label for="wavelength">Wavelength</label>
                </div>

                <div id="quiz-container">
                    <p id="quiz-question"></p>
                    <div id="quiz-options"></div>
                    <center><button class="button" id="submit-btn">Submit</button></center>
                </div>
            <div id="quiz-feedback"></div>
            </form>
        </div>
    </section>

        </main>

        <!--==================== FOOTER ====================-->
            <footer class="footer section">
                <div class="footer__container container grid">
                    <div class="footer__content">
                        <a href="#" class="footer__logo">
                            <img src="assets/img/logo.png" alt="" class="footer__logo-img">
                          Physics Hub
                        </a>

                        <p class="footer__description">Enjoy experimenting <br> science.</p>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-instagram-alt' ></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                                <i class='bx bxl-twitter' ></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">About</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Features</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">News</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Learn</h3>
                    </div>

                    <div class="footer__content">
                        <h3 class="footer__title">Quizzes</h3>
                        
                        <ul class="footer__links">
                            <li>
                                <a href="#" class="footer__link">Blog</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Questions</a>
                            </li>
                            <li>
                                <a href="#" class="footer__link">Articles</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <span class="footer__copy">&#169; Physics hub. All rigths reserved</span>

            </footer>

            <!--=============== SCROLL UP ===============-->
            <a href="#" class="scrollup" id="scroll-up">
                <i class='bx bx-up-arrow-alt scrollup__icon'></i>
            </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main2.js"></script>

  
    </body>
</html>
