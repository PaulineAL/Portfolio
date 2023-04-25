<?php
require('../model/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";
}


$titre_projet=$_POST['titre_projet'];
//$description=$_POST['description'];
//$explication=($_POST['explication']);
$titre_site_1=$_POST['titre_site_1'];
$lien_site_1=$_POST['lien_site_1'];
$titre_site_2=$_POST['titre_site_2'];
$lien_site_2=$_POST['lien_site_2'];

echo var_dump($_POST);

$sql = "UPDATE projet_2 SET ";
$sql .= "titre_projet=\"".$titre_projet."\", ";
//$sql .= "description=\"".$description."\", ";
//$sql .= "explication=\"".$explication."\", ";
$sql .= "titre_site_1=\"".$titre_site_1."\", ";
$sql .= "lien_site_1=\"".$lien_site_1."\", ";
$sql .= "titre_site_2=\"".$titre_site_2."\", ";
$sql .= "lien_site_2=\"".$lien_site_2"\" ";
$sql .= "WHERE id_projet = 1";

$statement = $pdo->query($sql);

if($statement) {
echo "<script>
window.location.href='../admin/index.php?homesetting=true'; </script>";
}

?>
