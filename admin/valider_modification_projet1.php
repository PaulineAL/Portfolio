<?php 
$pdo = require '../model/connect.php';
//récupération des champs venant du formulaire
$titre_projet=$_POST['titre_projet'];
$description=$_POST['description'];
$explication=$_POST['explication'];
$Img_projet_1=$_POST['Img_projet_1'];
$Img_projet_2=$_POST['Img_projet_2'];
$Img_projet_3=$_POST['Img_projet_3'];
$Img_projet_4=$_POST['Img_projet_4'];

//Ecriture de la requête 
$sqlQuery = 'UPDATE projet_1 SET titre_projet=:titre_projet,description=:description,explication=:explication,Img_projet_1=:Img_projet_1,Img_projet_2=:Img_projet_2,Img_projet_3=:Img_projet_3,Img_projet_4=:Img_projet_4;'

//Préparation 
$insertprojet = $pdo->prepare($sqlQuery);

//Exécution!
$insertprojet ->execute ([
	'titre_projet' => $titre_projet,
	'description' => $description,
    'explication' => $explication,
	'Img_projet_1' => $Img_projet_1,
    'Img_projet_2' => $Img_projet_2,
	'Img_projet_3' => $Img_projet_3,
	'Img_projet_4' => $Img_projet_4
]);
	header ("Location:index.php"); //appel de la page index.php 
?>