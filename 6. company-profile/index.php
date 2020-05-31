<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>PT.IPM</title>
  </head>

  <body>

    <!-- navbar -->
    <div class="navbar-fixed">
      <nav class="blue darken-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo">StudentCode</a>
            <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="">About Us</a></li>
              <li><a href="">Clients</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Portfolio</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <!-- sidenav -->
    <ul class="sidenav" id="mobile-nav">
      <li><a href="">About Us</a></li>
      <li><a href="">Clients</a></li>
      <li><a href="">Services</a></li>
      <li><a href="">Portfolio</a></li>
      <li><a href="">Contact Us</a></li>
    </ul>

    <!-- slider -->
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/slider/1.png">
          <div class="caption left-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/2.png">
          <div class="caption right-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="img/slider/3.png">
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- About Us -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">
          <h3 class="center light grey-text text-darken-3">About Us</h3>
          <div class="col m6 light">
            <h5>We Are Professionals</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quo accusantium repellat similique ipsa doloribus in aliquam earum eaque, possimus necessitatibus sunt repellendus ullam recusandae voluptas dolore debitis saepe facere.</p>
          </div>
          <div class="col m6 light">
            <p>WEB DEVELOPMENT</p>
            <div class="progress">
                <div class="determinate blue" style="width: 95%"></div>
            </div>
            <p>MOBILE APP DEVELOPMENT</p>
            <div class="progress">
                <div class="determinate blue" style="width: 85%"></div>
            </div>
            <p>GAME DEVELOPMENT</p>
            <div class="progress">
                <div class="determinate blue" style="width: 90%"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Clients -->
    <div class="parallax-container">
      <div class="parallax"><img src="img/slider/4.png"></div>

      <div class="container clients">
        <h3 class="center light white-text">Our Clients</h3>
        <div class="row">
          <div class="col m4 s12 center">
            <img src="img/clients/gojek.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/tokopedia.png">
          </div>
          <div class="col m4 s12 center">
            <img src="img/clients/traveloka.png">
          </div>
        </div>
      </div>
    </div>


    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
      const sideNav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sideNav);

      const slider = document.querySelectorAll('.slider');
      M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
      });

      const parallax = document.querySelectorAll('.parallax');
      M.Parallax.init(parallax);

    </script>
  </body>
</html>







