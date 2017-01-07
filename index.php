<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sean Loughran Portfolio</title>
  <meta charset-"UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" type="text/css" href="styles/main.css">
  <script src="https://use.fontawesome.com/b7ee99bf93.js"></script>
</head>

<body>

  <div id="dateDiv">
    <p id="currentDate"><?php echo date('l' . ' - ' . 'F' . ' ' . 'jS' . ', ' . 'Y') ?></p>
  </div>

  <nav>
    <h1>SL</h1>
    <div id="navButtons">
      <a href="#dateDiv" id="topLink"><button>Top</button></a>
      <a href="#trans" id="projectLink"><button>Portfolio</button></a>
      <a href="#contact" id="contactLink"><button id="contactButton">Contact</button></a>
    </div>
  </nav>

  <section id="main">

    <section id="about">

      <div id="aboutDiv">

        <div id="textDiv">
          <p class="aboutText">Hello, my name is Sean. I am a front-end software developer.</p>
          <p class="aboutText">I have been doing software and web development since June 2015 and am working towards become a full-stack software developer.</p>
          <p class="aboutText">While you are here please take a look at some of the projects I have worked on below.</p>
          <p class="aboutText">If you would like to contact me or have any questions, please see the contact section at the end of this page with my email and link to my LinkedIn profile.</p>
        </div>

        <div id="mainPicDiv">
          <img id="mainPic" class="aboutElement" src="images/portpic.jpg" alt="Sean sitting in chair.">
        </div>

      </div>

    </section>
    <!-- End of about section -->

    <div id="trans" class="transition">
      <h1>Projects</h1>
    </div>
    <!-- End of trans div-->

    <section id="portfolio">

      <div class="portfolioColumn">

      	<a href="https://seanloughran.github.io/weatherApp/" target="_blank"><img src="images/weatherapp.png" alt="screenshot for weather app" class="projImg"></a>
        <p class="projectDescription">Weather App</p>

        <a href="http://cocktail-fellows.herokuapp.com/" target="_blank"><img src="images/cocktailfellows.png" alt="screenshot for cocktail fellows website" class="projImg"></a>
        <p class="projectDescription">Cocktail Fellows</p>

        <a href="http://seanloughran.github.io/Bcykleta/" target="_blank"><img src="images/bcykleta.png" alt="screenshot for bcykelta bike shop website" class="projImg"></a>
        <p class="projectDescription">Bcykleta Bike Shop</p>

      </div>

      <div id="rightColumn" class="portfolioColumn">
      	<a href="https://belowtherimpdx.github.io/podcast/" target="_blank"><img src="images/belowTheRim.png" alt="screenshot for podcast website" class="projImg"></a>
        <p class="projectDescription">Podcast Website</p>

        <a href="https://seanloughran.github.io/chrisfarleytribute/" target="_blank"><img src="images/chrisfarley.png" alt="screenshot for chris farley tribute website" class="projImg"></a>
        <p class="projectDescription">Chris Farley Tribute</p>

        <a href="https://seanloughran.github.io/ChuckNorrisGenerator/" target="_blank"><img src="images/chucknorris.png" alt="Screenshot for chuck norris joke website" class="projImg"></a>
        <p class="projectDescription">Chuck Norris Joke Generator</p>

        <!-- http://metrobc.com.au/wp-content/uploads/2015/10/PROJECT-PLACEHOLDER-METROBC.jpg -->
      </div>

    </section>

    <!-- End of portfolio div -->

    <div class="transition">
      <h1>Contact</h1>
    </div>

    <section id="contact">

      <div id="contactRow">

        <div class="iconCol">
          <a href="https://www.linkedin.com/in/seancloughran" target="_blank">
            <i class="fa fa-linkedin fa-2x"></i>
          </a>
        </div>

        <div class="iconCol">
          <p id="email">seancloughran@gmail.com</p>
        </div>

        <div class="iconCol">
          <a href="https://github.com/seanloughran" target="_blank">
            <i class="fa fa-github fa-2x"></i>
          </a>
        </div>

      </div>

    </section>
    <!-- End of contact div-->

  </section>
  <!-- End of main section -->

  <footer>
    <hr>
    <h6>&copy; <?php echo date('Y'); ?> Sean Loughran</h6>
    <hr>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="scripts/main.js"></script>

</body>

</html>
