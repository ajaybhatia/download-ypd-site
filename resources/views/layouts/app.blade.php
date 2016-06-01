<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="utf-8">
      <!-- Main information -->
      <title>Downloads | YU Play Dev</title>
      <link rel="shortcut icon" href="">
      <link rel="icon" sizes="192x192" href="">
      <link rel="apple-touch-icon" href="">
      <link rel="apple-touch-icon-precomposed" href="">
      <!-- HTML5 shim -->
      <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="theme-color" content="#4C4C4C">
      <!-- Google Fonts -->
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:500">
      <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,500,500italic,700,700italic">
      <!-- Fontawesome CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
      <!-- Custom style -->
      <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
   </head>
   <body class="noscript">
      <!-- Header -->
      <header class="desktop">
         <div class="header-button">
            <p><a class="js-navigationlink" href="#">YU Play Dev</a></pa>
         </div>
         <div class="header-button">
            <p><a class="js-navigationlink" href="#">Downloads</a></p>
         </div>
      </header>
      <header class="mobile">
         <div class="header-button">
            <p><a class="js-navigationlink" href="index.html">YU Play Dev</a></pa>
         </div>
      </header>
      <button id="header-menu-button"><span></span><span></span><span></span></button><!-- Navigation drawer -->
      <section id="nav-drawer">
         <div class="nav-side">
            <ul class="nav-side-central">
               <li>
                  <p><a class="js-navigationlink" href="index.html">Home</a></p>
               </li>
               <li>
                  <p><a href="">Downloads</a></p>
               </li>
               <li>
                  <p><a class="js-navigationlink" href=""></a></p>
               </li>
               <li><span class="separator"></span></li>
               <li>
                  <p><a href="">JIRA</a></p>
               </li>
               <li>
                  <p><a href="">Gerrit</a></p>
               </li>
               <li>
                  <p><a href="https://github.com/YUTeleventures">GitHub</a></p>
               </li>
               <li class="desktop">
                  <p>Some Message</p>
               </li>
            </ul>
         </div>
         <div class="nav-side">
            <div class="nav-side-central">
               <p><a class="js-navigationlink" href="index.html">Some YU Icon</a></p>
            </div>
         </div>
      </section>
      <!-- The noscript notice -->
      <noscript class="notice">
         <div class="notice-central">
            <img class="animate" src="" alt="Some YU Icon">
            <p>Hey! This site depends on JavaScript like many others.<br>Please enable your JS and reload this page.</p>
         </div>
      </noscript>
      <!-- Site section -->
      <section id="section-index" class="site-section visible">
         <!-- Promotional images -->
         <div class="carousel">
            <img class="visible" src="">
            <img src="">
            <img src=""></div>
         <!-- Introduction text -->
         <div id="intro">
            <img class="js-animate-viewport" src="">
            <p>Introduction</p>
            <span class="separator"></span>
         </div>
         <!-- Feature highlights -->
         <div id="features">
            <div class="feature">
               <img class="demo js-animate-viewport" src="">
               <div class="text">
                  <p class="title">Title 1</p>
                  <p class="description">
                    Description 1
                </p>
               </div>
            </div>
            <div class="feature">
               <img class="demo js-animate-viewport" src="">
               <div class="text">
                  <p class="title">Title 2</p>
                  <p class="description">
                      Description 2
                  </p>
               </div>
            </div>
            <div class="feature">
               <img class="demo js-animate-viewport" src="">
               <div class="text">
                  <p class="title">Title 3</p>
                  <p class="description">
                      Description 3
                  </p>
               </div>
            </div>
            <div class="feature">
               <img class="demo js-animate-viewport" src="">
               <div class="text">
                  <p class="title">Title 4</p>
                  <p class="description">
                      Description 4
                  </p>
               </div>
            </div>
            <div class="nofloat"></div>
         </div>
         <span class="separator"></span>
         <!-- Footer quote -->
         <footer>
            <p>YU Televentures</p>
         </footer>
      </section>
      <!-- White placeholder screen for the initial animation -->
      <section class="site-section white"></section>
      <!-- Down arrow --> 
      <button id="downarrow" data-scroll-index="intro">
        <img class="rot180" src="{{ URL::asset('images/arrow.svg') }}" alt="Down arrow">
      </button>

      <!-- JavaScript -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="{{ URL::asset('js/main.js') }}"></script>
   </body>
</html>