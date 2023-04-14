<?php 
$pdo = require 'model/connect.php';
$sql1 = 'SELECT * FROM img';
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
      <div class="onglet">
        <p><?php echo $data2["title_4"]?></p>
        <a class="X" href="index.html"> X </a>
      </div>
      <div class="bg contact">
        <img
          src="<?php echo $data1["img_contact"]?>" alt=""
        />

        <!-- PAS FONCTIONNEL -->
        <form action="page4_contact.php" method="post">
          <fieldset>
            <legend>Contact me</legend>

            <!-- Champ nom-->
            <div>
              <label for="name">Name</label>
              <input
                type="name"
                id="name"
                placeholder="Enter your name"
                required
              />
            </div>

            <br />

            <!-- Champ Email-->
            <div>
              <label for="email">E-mail</label>
              <input
                type="email"
                id="email"
                placeholder="Enter your E-mail"
                required
              />
            </div>

            <br />

            <!-- Champ Objet -->
            <div>
              <label for="objet">Object</label>
              <input
                type="objet"
                id="objet"
                placeholder="Object of the message"
                required
              />
            </div>

            <br />

            <!-- Champ Message-->
            <div>
              <label for="msg">Message</label>
              <textarea cols="60" rows="15" id="msg" required> </textarea>
            </div>

            <br />

            <input
              id="submit"
              type="submit"
              value="Envoyer"
              class="submit-btn"
            />
          </fieldset>
        </form>

<!-- formulaire php -->
        <?php
        $name = $_POST['name'];
        $email = $_POST['email']; 
        $objet = $_POST['objet']; 
        $msg = $_POST['msg']; 

        $sqlquery = "INSERT INTO contact ('$name', '$email', '$objet','$msg')"

          
        ?>
<!-- Fin php -->
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
