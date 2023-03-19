<?php

session_start();
//1- recuperation des données
$id=  $_POST['idc'];
$nom= $_POST['nom'];
$description= $_POST['description'];
$createur= $_SESSION['id'];
$date_modification= date("Y-m-d");
//-2 la chaine de la connexion
include "../../inc/functions.php";
$conn= connect();

//-3 creation de la requette
$requette = "UPDATE categories SET nom= '$nom', description= '$description', date_modification= '$date_modification' WHERE id= $id";

//-4 resultat de la requette
$resultat = $conn ->query($requette);

//4- resultat de la requette
if ($resultat){
   header ('location: liste.php?modifier=ok');
}
?>