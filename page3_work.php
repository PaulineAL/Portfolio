<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT titre_projet FROM projet_1';
$sql2 = 'SELECT * FROM nav';
$sql3 = 'SELECT * FROM footer';
$sql4 = 'SELECT titre_projet FROM projet_2';
$sql5 = 'SELECT titre_projet FROM projet_3';
$sql6 = 'SELECT titre_projet FROM projet_4';
$sql7 = 'SELECT img_work FROM img';
$statement = $pdo->query($sql1);
// fetch the data
$data1 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql2);
$data2 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql3);
$data3 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql4);
$data4 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql5);
$data5 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql6);
$data6 = $statement->fetch(PDO::FETCH_ASSOC);
$statement = $pdo->query($sql7);
$data7 = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
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
    <title>Pauline AL - Work</title>
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
      <div class="onglet">
        <p><?php echo $data2["title_3"]?></p>
        <a class="X" href="index.php"> X </a>
      </div>

      <div class="bg work">
        <div class="Proj1">
          <div class="Projet">
            <a href="page5_work1.php"><?php echo $data1["titre_projet"]?></a>
          </div>

          <div class="Projet">
            <a href="page6_work2.php"><?php echo $data4["titre_projet"]?></a>
          </div>
        </div>
        <img
          src="<?php echo $data7["img_work"]?>"
          alt=""
        />
        <div class="Proj2">
          <div class="Projet">
            <a href="page7_work3.php"><?php echo $data5["titre_projet"]?></a>
          </div>

          <div class="Projet">
            <a href="page8_work4.php"><?php echo $data6["titre_projet"]?></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Le super footer-->
    <footer>
      <div class="RS_liens">
      <h4><a href=<?php echo $data3['lien_insta']?>><img class="rs" src="https://cdn-icons-png.flaticon.com/512/174/174855.png" alt="logo instagram"> <?php echo $data3["instagram"]?></a></h4>
      <h4><a href=<?php echo $data3['lien_linkedin']?>><img class="rs" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/768px-LinkedIn_icon.svg.png" alt="logo linkedin"><?php echo $data3["linkedin"]?></a></h4>
      <h4><a href=<?php echo $data3['lien_twt']?>><img class="rs" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/twitter_circle-512.png" alt="logo twitter"><?php echo $data3["twitter"]?></a></h4>
</div>
<hr class="footer_separator">
      <p><?php echo $data3["txt_footer"]?></h4>
    </footer>
  </body>
</html>
