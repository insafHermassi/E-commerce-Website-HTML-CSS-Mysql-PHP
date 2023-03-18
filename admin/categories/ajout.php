<?php

session_start();
//1- recuperation des données
$nom= $_POST['nom'];
$description= $_POST['description'];
$createur= $_SESSION['id'];
$date_creation= date("Y-m-d");
//-2 la chaine de la connexion
include "../../inc/functions.php";
$conn= connect();

//-3 creation de la requette
$requette = "INSERT INTO categories(nom, description, createur, date_creation) VALUES ('$nom', '$description', '$createur', '$date_creation')";

//-4 resultat de la requette
$resultat = $conn ->query($requette);

//4- resultat de la requette
if ($resultat){
   header ('location: liste.php?ajout=ok');
}
?>