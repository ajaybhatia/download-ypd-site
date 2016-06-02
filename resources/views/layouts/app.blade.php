<!DOCTYPE html>
<html dir="ltr" lang="en-US">
   <head>
      <meta charset="utf-8">
      <!-- Main information -->
      <title>Downloads | YU Play Dev</title>
      <link rel="shortcut icon" href="">
      <link rel="icon" sizes="16x16" href="{{ URL::asset('images/favicon.ico') }}">
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
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
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
                  <p><a class="js-navigationlink" href="#">Home</a></p>
               </li>
               <li>
                  <p><a href="">YU Developers Programme</a></p>
               </li>
               <li>
                  <p><a class="js-navigationlink" href="">YU Forums</a></p>
               </li>
               <li><span class="separator"></span></li>
               <li>
                  <p><a href="">Build</a></p>
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
                <p>
                    <a class="js-navigationlink" href="index.html">
                        <img src="{{ URL::asset('images/yu_play_god_logo.jpg') }}" alt="">
                    </a>
                </p>
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
        <!-- <div class="carousel">
            <img class="visible" src="{{ URL::asset('images/yu_yunicorn.png') }}">
            <img src="{{ URL::asset('images/yu_yutopia.png') }}">
            <img src="{{ URL::asset('images/yu_yunique.png') }}">
            <img src="{{ URL::asset('images/yu_yuphoria.png') }}">
            <img src="{{ URL::asset('images/yu_yureka.png') }}">
        </div> -->

        <div class="downloads">
            <input class="search" type="text" name="phone" value="" placeholder="Enter Phone Model to Search ROM">

            <div class="row">

                <div class="col-md-3 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Device Name (Build Type)</h3>
                        </div>
                        <div class="panel-body">
                            <p><a>Build Name</a></p>
                            <p>sha1</p>
                        </div>
                        <div class="panel-footer">Time Added</div>
                    </div>        
                </div>

                <div class="col-md-3 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Device Name (Build Type)</h3>
                        </div>
                        <div class="panel-body">
                            <p><a>Build Name</a></p>
                            <p>sha1</p>
                        </div>
                        <div class="panel-footer">Time Added</div>
                    </div>        
                </div>

                <div class="col-md-3 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Device Name (Build Type)</h3>
                        </div>
                        <div class="panel-body">
                            <p><a>Build Name</a></p>
                            <p>sha1</p>
                        </div>
                        <div class="panel-footer">Time Added</div>
                    </div>        
                </div>

                <div class="col-md-3 col-md-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Device Name (Build Type)</h3>
                        </div>
                        <div class="panel-body">
                            <p><a>Build Name</a></p>
                            <p>sha1</p>
                        </div>
                        <div class="panel-footer">Time Added</div>
                    </div>        
                </div>

            </div>
            
        </div>

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