<?php
require('../model/connect.php');
if (!isset($_SESSION['isUserLoggedIn'])){
echo "<script>window.location.href='login.php';</script>";
}


$titre_projet=$_POST['titre_projet'];
//$description=$_POST['description'];
//$explication=($_POST['explication']);

$sql = "UPDATE projet_3 SET ";
$sql .= "titre_projet=\"".$titre_projet."\", ";
//$sql .= "description=\"".$description."\", ";
//$sql .= "explication=\"".$explication."\", ";
$sql .= "WHERE id_projet = 41";

$statement = $pdo->query($sql);

if($statement) {
echo "<script>
window.location.href='../admin/index.php?homesetting=true'; </script>";
}

?>
