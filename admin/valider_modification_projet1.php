<?php
$pdo = require('../model/connect.php');

if(isset($_POST['modifier'])){
$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=$_POST['explication'];
$img_projet_1=$_POST['img_projet_1'];
$img_projet_2=$_POST['img_projet_2'];
$img_projet_3=$_POST['img_projet_3'];
$img_projet_4=$_POST['img_projet_4'];

$sql = "UPDATE projet_1 SET titre_projet=$titre_projet, description=$description,explication=$explication,img_projet_1=$img_projet_1,img_projet_2=$img_projet_2,img_projet_3=$img_projet_3, img_projet_4=$img_projet_4 WHERE id_projet = 1 ";

$statement = $pdo->query($sql);

if($statement) {
echo "<script>
window.location.href='../admin/index.php?homesetting=true'; </script>";
}
}
?>
