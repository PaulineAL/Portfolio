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
        <img class="mono" src="monogramelevrai.png" alt="monogram of my initials, PAL"/>
        <a href="page3_work.html">Work</a>
        <a href="page4_contact.html">Contact</a>
      </nav>
    </header>

    <div class="centre">
      <!-- L'onglet au dessus-->
      <div class="onglet w">
        <p>Perfume poster</p>
        <a class="X" href="page3_work.html"> X </a>
      </div>

      <div class="bg w1">
        <section class="carousel" aria-label="Gallery">
          <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper">
                <img class="parfum" src="Affiche.jpg" alt="Perfume poster" />
                <a href="#carousel__slide4" class="carousel__prev"
                  >Go to last slide</a
                >
                <a href="#carousel__slide2" class="carousel__next"
                  >Go to next slide</a
                >
              </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper">
                <img class="parfum" src="Fond.jpg" alt="Background of the poster"/>
              </div>
              <a href="#carousel__slide1" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide3" class="carousel__next"
                >Go to next slide</a
              >
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
              <div class="carousel__snapper"><img class="parfum" src="Coquillage.jpeg" alt="Scallop shell used for the poster"></div>
              <a href="#carousel__slide2" class="carousel__prev"
                >Go to previous slide</a
              >
              <a href="#carousel__slide4" class="carousel__next"
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
              <li class="carousel__navigation-item">
                <a href="#carousel__slide3" class="carousel__navigation-button"
                  >Go to slide 3</a
                >
              </li>
            </ol>
          </aside>
        </section>

        <div class="explication">
          <h1>Perfume poster</h1>
          <h2>
            This project was made for a homework. I had to imagine a perfume,
            make a new bottle and imagine an ad poster for it.
          </h2>
          <p>
            I adore Greek mythology, and art, as you probably could tell, and I
            thought right away of using the painting "The birth of Venus" by
            Boticelli as an inspiration. Going from there, I decided to name my
            perfume "Aphrodite", for the goddess of beauty. I then chose
            pictures of two differents bottles of parfume, one with a curvy
            body, to represent the curves of a woman, and for the lid, I chose
            one with a miror effect, as Aphrodite is associated with mirors.
            <br />
            <br />
            For the background, I obviously needed a beach, but I wanted one
            with sea foam, since it's associated to Aphrodite as well. I added
            more since there wasn't enough in my opinion. Then I added the
            scallop shell, some shadows, and there it was!
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
