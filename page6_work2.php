<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <link href="style.css" rel="stylesheet" />
    <title>Portfolio</title>
  </head>
  <body>
    <!-- Le header-->
    <header>
      <nav>
        <a href="index.html">Home</a>
        <a href="page2_about.html">About</a>
        <img class="mono" src="monogramelevrai.png" alt="monogram of my initials, PAL" />
        <a href="page3_work.html">Work</a>
        <a href="page4_contact.html">Contact</a>
      </nav>
    </header>

    <div class="centre">
      <!-- L'onglet au dessus-->
      <div class="onglet w">
        <p>Drawing perspective</p>
        <a class="X" href="page3_work.html"> X </a>
      </div>

      <div class="bg w1">
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper">
                <img class="perspec" src="Perspective1.png" alt="A drawing of perspective" />
                <a href="#carousel__slide4" class="carousel__prev"
                  >Go to last slide</a
                >
                <a href="#carousel__slide2" class="carousel__next"
                  >Go to next slide</a
                >
              </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"> <img class="perspec" src="Perspective2.PNG" alt="Two different drawings of perspective"/></div>
              <a href="#carousel__slide1" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide3" class="carousel__next"
                >Go to next slide</a
              >
            </li>
          </ol>
          <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
              <li class="carousel__navigation-item">
                <a href="#carousel__slide1" class="carousel__navigation-button"
                  >Go to slide 1</a
                >
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide2" class="carousel__navigation-button"
                  >Go to slide 2</a
                >
              </li>
            </ol>
          </aside>
        </section>

        <div class="explication">
          <h1>Drawing perspective</h1>
          <h2>
            This project is still on-going. My goal is to master perspective, as
            I really enjoy drawing backgrounds.
          </h2>
          <p>
            I learnt basic perspective in secondary school, and while I hated it
            in the beginning, it grew on me. I started enjoying it, and
            praticing more. I draw digitally and traditionally, but I do prefer
            perspective on paper. I usually do the same thing, basic buildings,
            but I'm slowly trying to try out more things. Drawing backgrounds in
            my art is usually something I avoid, just like I used to avoid to
            draw hands, but it brings so much depth in a piece that it's
            essential. And I love creating an ambiance in my drawings, so that
            the spectator feels something.
          </p>
        </div>
      </div>
    </div>
    <!-- Le super footer-->
    <footer>
      <h4>@Instagram Account</h4>
      <h4>@Twitter Account</h4>
      <h4>email@gmail.com</h4>
    </footer>
  </body>
</html>
