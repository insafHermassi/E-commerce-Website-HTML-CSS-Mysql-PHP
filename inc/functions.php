<?php

function getALLCategories(){

// 1- connexion BD
$servername = "localhost";
$DBuser = "root";
$DBpassword = "";
$DBname = "e_commerce";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$DBname" , $DBuser, $DBpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }


// 2- creation de la requette

$requette = "SELECT * FROM categories ";

//3- execution de la requette

$resultat = $conn ->query($requette);

//4- resultat de la requette

$categories = $resultat->fetchAll();
//var_dump($categories)

return $categories;
}

?>