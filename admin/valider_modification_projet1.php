<?php
$pdo = require('../model/connect.php');
if(isset($_POST['modifier'])){
$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=$_POST['explication'];
$Img_projet_1=$_POST['Img_projet_1'];
$Img_projet_2=$_POST['Img_projet_2'];
$Img_projet_3=$_POST['Img_projet_3'];
$Img_projet_4=$_POST['Img_projet_4'];

$sql = "UPDATE projet_1 SET ";
$sql .= "titre_projet=\"".$titre_projet."\",";
$sql .= "description=\"".$description."\",";
$sql .= "explication=\"".$explication."\",";
$sql .= "Img_projet_1=\"".$Img_projet_1."\",";
$sql .= "Img_projet_2=\"".$Img_projet_2."\",";
$sql .= "Img_projet_3=\"".$Img_projet_3."\",";
$sql .= "Img_projet_4=\"".$Img_projet_4."\",";
$sql .= "WHERE id_projet =1 ";

$statement = $pdo->query($sql);

if($statement) {
echo "<script>
window.location.href='../admin/index.php?homesetting=true'; </script>";
}
}
?>
