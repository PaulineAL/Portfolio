<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT * FROM projet_2';
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
    <title>Pauline AL - Web developping</title>
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
        <p>Drawing perspective</p>
        <a class="X" href="page3_work.php"> X </a>
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
