<?php
require('../model/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";
}

function clean($str)
{
$str = @trim($str);
if(get_magic_quotes_gpc()) {$str = stripslashes($str);  }
return mysql_real_escape_string($str);
}

$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=clean($_POST['explication']);
$img_projet_1=$_POST['img_projet_1'];
$img_projet_2=$_POST['img_projet_2'];
$img_projet_3=$_POST['img_projet_3'];
$img_projet_4=$_POST['img_projet_4'];

echo var_dump($_POST);

$sql = "UPDATE projet_1 SET ";
$sql .= "titre_projet=\"".$titre_projet."\", ";
$sql .= "description=\"".$description."\", ";
$sql .= "explication=\"".$explication."\", ";
$sql .= "img_projet_1=\"".$img_projet_1."\", ";
$sql .= "img_projet_2=\"".$img_projet_2."\", ";
$sql .= "img_projet_3=\"".$img_projet_3."\", ";
$sql .= "img_projet_4=\"".$img_projet_4."\" ";
$sql .= "WHERE id_projet = 1";

$statement = $pdo->query($sql);

//if($statement) {
//echo "<script>
//window.location.href='../admin/index.php?homesetting=true'; </script>";
//}

?>
