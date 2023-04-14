<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <title>Portfolio</title>
  </head>
  <body>
    <!-- Le header-->
    <header>
      <nav>
        <a href="index.html">Home</a>
        <a href="page2_about.html">About</a>
        <img class="mono" src="monogramelevrai.png" alt="monogram of my initials, PAL"/>
        <a href="page3_work.html">Work</a>
        <a href="page4_contact.html">Contact</a>
      </nav>
    </header>

    <div class="centre">
      <!-- L'onglet au dessus-->
      <div class="onglet w long">
        <p>Creating original characters</p>
        <a class="X" href="page3_work.html"> X </a>
      </div>

      <div class="bg w1">
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper">
                <img class="perso" src="Perso2.png" alt="Drawing of two original characters, Tee and Void"/>
                <a href="#carousel__slide4" class="carousel__prev"
                  >Go to last slide</a
                >
                <a href="#carousel__slide2" class="carousel__next"
                  >Go to next slide</a
                >
              </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"> <img class="perso" src="Perso3.PNG" alt="Multiple sketches of characters"/> </div>
              <a href="#carousel__slide1" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide3" class="carousel__next"
                >Go to next slide</a
              >
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"><img class="perso" src="Perso4.png" alt="A reference sheet of an original character, Ronnie"></div>
              <a href="#carousel__slide2" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide4" class="carousel__next"
                >Go to next slide</a
              >
            </li>
            <li id="carousel__slide4" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"> <img class="perso" src="Perso5.png" alt="Sketch of another original character, Aethalia"/></div>
              <a href="#carousel__slide3" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide1" class="carousel__next"
                >Go to first slide</a
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
              <li class="carousel__navigation-item">
                <a href="#carousel__slide3" class="carousel__navigation-button"
                  >Go to slide 3</a
                >
              </li>
              <li class="carousel__navigation-item">
                <a href="#carousel__slide4" class="carousel__navigation-button"
                  >Go to slide 4</a
                >
              </li>
            </ol>
          </aside>
        </section>
        <div class="explication">
          <h1>Creating original characters</h1>
          <h2>
            i've always wanted to write my own story, comic, manga, or even
            movie. Designing characters has always been something I loved, and
            it's been massively present in my improvement in art.
          </h2>
          <p>
            Here, you can see some of my original characters. <br/>
            The ones on the first slide are called Tee (at the left) and Void (at the right). They're inspired from the cyberpunk universe. <br/>
            On the second slides, you can see multiples sketches of ideas of orignal characters. A lot of them weren't kept as actual characters, but I still wanted to put them here. <br/>
            On the third slide, it is a reference sheet for emotions, for my character Ronnie. She's a witch, studying magic. She isn't as developped as Tee and Void, who both have a very complete story, but I still like her nonetheless. <br/>
            Finally, on the last slide, it's Aethalia, who's inspired by biblical accurate angels. She also has a developped backstory, she's the goddess of time and light, and has to wear a helmet to contain her power.
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
