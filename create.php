<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Geography Hub</title>
     <style>
        .code-container {
            position: relative;
            margin: 20px 0;
        }
        .code-container pre {
            background: #000; /* Set background color to black */
            color: #fff; /* Set text color to white for better readability */
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: auto;
            font-family: 'Courier New', Courier, monospace; /* Use monospace font for code */
            font-size: 14px; /* Set font size */
            line-height: 1.5; /* Increase line height for better readability */
        }
        .copy-button {
            position: absolute;
            top: 5px;
            right: 10px;
            padding: 5px;
            border: none;
            background-color: hsl(var(--hue), 91%, 54%);
            color: hsl(var(--hue), 4%, 100%);
            cursor: pointer;
            border-radius: 5px;
        }
        .copy-button:hover {
            background-color: hsl(var(--hue), 91%, 50%);
        }
    </style>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="button button--ghost">Virtual Reality - VR</a>
            <div class="nav__close" id="nav-close">
                <i class='bx bx-x'></i>
            </div>
            <img src="assets/img/nav-img.png" alt="" class="nav__img">
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
                            
                               
                            </div>
                            <div class="home__data">
                                <h1 class="home__title">Create Your Own VR Environment <br> </h1>
                                <p class="home__description">Learn how to create a simple VR environment using A-Frame. Follow the steps below and start your VR journey!</p>
                                <h3 class="home__subtitle">Step 1:</h3>
                                <h1 class="home__title">Set Up Your Environment <br></h1>
                                <p class="home__description">Open a web browser and go to an online code editor like Glitch or CodePen.</p>                          
                            </div>
                    </section>

                  
                    

                    <!-- HOME SLIDER 2 -->
                     <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__data">
                                <h3 class="home__subtitle">Step 2: </h3>
                                <h1 class="home__title">Basic HTML Structure</h1>
                                <p class="home__description">Create a new project and start with this basic HTML template:</p>
                                <div class="code-container">
                                    <button class="copy-button" onclick="copyToClipboard('code1')">Copy</button>
                                    <pre id="code1">&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;My First A-Frame VR Scene&lt;/title&gt;
    &lt;!-- Include A-Frame Library --&gt;
    &lt;script src="https://aframe.io/releases/1.2.0/aframe.min.js"&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;!-- A-Frame Scene --&gt;
    &lt;a-scene&gt;
        &lt;a-box position="0 1 -3" rotation="0 45 0" width="1" height="1" depth="1" color="#4CC3D9"&gt;&lt;/a-box&gt;
        &lt;a-plane position="0 0 -4" rotation="-90 0 0" width="10" height="10" color="#7BC8A4"&gt;&lt;/a-plane&gt;
        &lt;a-sky color="#ECECEC"&gt;&lt;/a-sky&gt;
    &lt;/a-scene&gt;
&lt;/body&gt;
&lt;/html&gt;</pre>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <!-- HOME SLIDER 3 -->
                   <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__data">
                                <h3 class="home__subtitle">Step 3:</h3>
                                <h1 class="home__title">Adding Basic Elements <br> </h1>
                                <p class="home__description">Add a box and a plane to your scene:</p>
                                <div class="code-container">
                                    <button class="copy-button" onclick="copyToClipboard('code2')">Copy</button>
                                    <pre id="code2">&lt;a-box position="0 1 -3" rotation="0 45 0" width="1" height="1" depth="1" color="#4CC3D9"&gt;&lt;/a-box&gt;
&lt;a-plane position="0 0 -4" rotation="-90 0 0" width="10" height="10" color="#7BC8A4"&gt;&lt;/a-plane&gt;
&lt;a-sky color="#ECECEC"&gt;&lt;/a-sky&gt;</pre>
                                </div>
                            </div>
                        </div>
                    </section>

                     <!-- HOME SLIDER 4 -->
                     <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__data">
                                <h3 class="home__subtitle">Step 4:</h3>
                                <h1 class="home__title">Adding Interactivity <br> </h1>
                                <p class="home__description">Add a clickable sphere that changes color when clicked:</p>
                                <div class="code-container">
                                    <button class="copy-button" onclick="copyToClipboard('code3')">Copy</button>
                                    <pre id="code3">&lt;a-sphere position="0 1.25 -5" radius="1.25" color="#EF2D5E" id="clickable-sphere"&gt;&lt;/a-sphere&gt;

&lt;script&gt;
    var sphere = document.querySelector('#clickable-sphere');
    sphere.addEventListener('click', function () {
        var newColor = '#' + Math.floor(Math.random()*16777215).toString(16);
        sphere.setAttribute('color', newColor);
    });
&lt;/script&gt;</pre>
                                </div>
                            </div>
                        </div>
                    </section>

                      <!-- HOME SLIDER 5 -->
                    <section class="swiper-slide">
                          <div class="home__content grid">
                            <div class="home__data">
                                <h3 class="home__subtitle">Step 5:</h3>
                                <h1 class="home__title">Creating a 360-Degree Video</h1>
                                <p class="home__description">Add a 360-degree video to your scene:</p>
                                <div class="code-container">
                                    <button class="copy-button" onclick="copyToClipboard('code5')">Copy</button>
                                    <pre id="code5">&lt;a-scene&gt;
    &lt;a-videosphere src="path/to/360-video.mp4"&gt;&lt;/a-videosphere&gt;
&lt;/a-scene&gt;</pre>
                                </div>
                              </div>
                        </div>
                    </section>

                     <!-- HOME SLIDER 6 -->
                    <section class="swiper-slide">
                        <div class="home__content grid">
                            <div class="home__data">
                                <h3 class="home__subtitle">Step 6:</h3>
                                <h1 class="home__title">Creating a 360-Degree Image</h1>
                                <p class="home__description">Add a 360-degree image to your scene:</p>    
                            </div>
                            <div class="code-container">
                                <button class="copy-button" onclick="copyToClipboard('code6')">Copy</button>
                                    <pre id="code6">&lt;a-scene&gt;
                                    &lt;a-sky src="path/to/360-image.jpg"&gt;&lt;/a-sky&gt;&lt;/a-scene&gt;</pre>
                            </div>
                        </div>
                    </section>
                     

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
                    
    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content"></div>
            <span class="footer__copy">&#169; Geography Hub. All rights reserved</span>
        </div>
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

     <script>
        function copyToClipboard(id) {
            var copyText = document.getElementById(id).textContent;
            var textArea = document.createElement("textarea");
            textArea.value = copyText;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand("Copy");
            textArea.remove();
            alert("Code copied to clipboard!");
        }
    </script>

</body>
</html>

