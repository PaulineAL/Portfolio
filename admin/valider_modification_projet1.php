<?php
require('../model/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";
}

if(isset($_POST['modifier'])){
$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=$_POST['explication'];
$img_projet_1=$_POST['img_projet_1'];
$img_projet_2=$_POST['img_projet_2'];
$img_projet_3=$_POST['img_projet_3'];
$img_projet_4=$_POST['img_projet_4'];

$sql = "UPDATE projet_1 SET ";
$sql .= "titre_projet='"'men'"', ";
$sql .= "description='"'men'"', ";
$sql .= "explication='"'men'"', ";
$sql .= "img_projet_1='"'men'"', ";
$sql .= "img_projet_2='"'men'"', ";
$sql .= "img_projet_3='"'men'"', ";
$sql .= "img_projet_4='"'men'"', ";

$statement = $pdo->query($sql);

//if($statement) {
//echo "<script>
//window.location.href='../admin/index.php?homesetting=true'; </script>";
//}

echo $titre_projet;
}
?>
