<?php
//echo "id de categorie".$_GET['idc'];

$idcategorie = $_GET['idc'];

 include "../../inc/functions.php";

 // 1- connexion BD

$conn = connect();

// 2- creation de la requette

$requette = "DELETE FROM categories WHERE id = '$idcategorie' ";

//3- execution de la requette

$resultat = $conn ->query($requette);

//4- resultat de la requette

if ($resultat){
    header ('location: liste.php?delete=ok');
}





?>