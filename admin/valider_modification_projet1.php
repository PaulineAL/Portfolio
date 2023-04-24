<?php
require('../model/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";
}

$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=$_POST['explication'];
$img_projet_1=$_POST['img_projet_1'];
$img_projet_2=$_POST['img_projet_2'];
$img_projet_3=$_POST['img_projet_3'];
$img_projet_4=$_POST['img_projet_4'];

echo var_dump($_POST);

$sql = "UPDATE projet_1 SET ";
$sql .= "titre_projet=\"".$titre_projet."\", ";
$sql .= "description=\"".$description."\", ";
$sql .= "img_projet_1=\"".$img_projet_1."\", ";
$sql .= "img_projet_2=\"".$img_projet_2."\", ";
$sql .= "img_projet_3=\"".$img_projet_3."\", ";
$sql .= "img_projet_4=\"".$img_projet_4."\" ";
$sql .= "WHERE id_projet = 1";

$sql2 = "UPDATE projet_1 SET ";
$sql2 .= "explication=\"".$explication."\", ";
$sql2 .= "WHERE id_projet = 1";

$statement = $pdo->query($sql);
$statement2 = $pdo->query($sql2);

//if($statement) {
//echo "<script>
//window.location.href='../admin/index.php?homesetting=true'; </script>";
//}

?>
