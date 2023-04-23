<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT * FROM projet_4';
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
    <link href="style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oxanium:wght@300;400;500;600&display=swap"
      rel="stylesheet"
    />
    <title>Pauline AL - Drawing </title>
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
