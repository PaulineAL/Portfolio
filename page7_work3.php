<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT * FROM projet_3';
$sql2 = 'SELECT * FROM nav';
$sql3 = 'SELECT * FROM footer';
$statement = $pdo->query($sql1);
// fetch the data
$data1 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql2);
$data2 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql3);
$data3 = $statement->fetch(PDO::FETCH_ASSOC);
?>

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
      <img class="mono" src="monogramebleu.png" alt="monogram of my initials, PAL"/>
        <a href="index.php"><?php echo $data2["title_1"]?></a>
        <a href="page2_about.php"><?php echo $data2["title_2"]?></a>
        <a href="page3_work.php"><?php echo $data2["title_3"]?></a>
        <a href="page4_contact.php"><?php echo $data2["title_4"]?></a>
        <a href="admin/login.php"><img src="https://pcci-group.com/wp-content/uploads/2022/09/Back-Office.png" alt="backoffice icon"></a>
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
      <div class="RS_liens">
      <h4><img class="rs" src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="logo instagram"> <?php echo $data3["instagram"]?></h4>
      <h4><img class="rs" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/768px-LinkedIn_icon.svg.png" alt="logo linkedin"><?php echo $data3["linkedin"]?></h4>
      <h4><img class="rs" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt="logo twitter"><?php echo $data3["twitter"]?></h4>
</div>
<hr class="footer_separator">
      <p><?php echo $data3["txt_footer"]?></h4>
    </footer>
  </body>
</html>
