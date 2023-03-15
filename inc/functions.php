<?php
function connect (){
  $servername = "localhost";
  $DBuser = "root";
  $DBpassword = "";
  $DBname = "e_commerce";
  
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$DBname" , $DBuser, $DBpassword);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
    return $conn;
}
function getALLCategories(){

// 1- connexion BD

$conn = connect();

// 2- creation de la requette

$requette = "SELECT * FROM categories ";

//3- execution de la requette

$resultat = $conn ->query($requette);

//4- resultat de la requette

$categories = $resultat->fetchAll();
//var_dump($categories)

return $categories;

}

function getALLProducts(){

  // 1- connexion BD
  $conn = connect();
  
  // 2- creation de la requette
  
  $requette = "SELECT * FROM produits ";
  
  //3- execution de la requette
  
  $resultat = $conn ->query($requette);
  
  //4- resultat de la requette
  
  $produits = $resultat->fetchAll();
  //var_dump($categories)
  
  return $produits;
  }
  function searchProduits($keywords){
    // 1- connexion BD
$conn = connect();

// 2- creation de la requette

$requette = "SELECT * FROM produits WHERE name LIKE '%$keywords%' ";

//3- execution de la requette

$resultat = $conn ->query($requette);

//4- resultat de la requette

$produits = $resultat->fetchAll();
//var_dump($categories)

return $produits;

  }
  function getProduitById($id){

   // 1- connexion BD
   $conn = connect();

    // 2- creation de la requette

$requette = "SELECT * FROM produits WHERE id =$id ";

//3- execution de la requette

$resultat = $conn ->query($requette);

//4- resultat de la requette

$produit = $resultat->fetch();


return $produit;
  }
 function AddVisiteur($data){

    // 1- connexion BD
    $conn = connect();
 
     // 2- creation de la requette
 $mphash = md5($data['mp']);
 $requette = "INSERT INTO visiteurs(nom, prenom, mp, email, telephone) VALUES ('".$data['nom']."', '".$data ['prenom']."', '". $mphash."', '".$data['email']."', '".$data['telephone']."' )";
 
 //3- execution de la requette
 
 $resultat = $conn ->query($requette);
 
 //4- resultat de la requette
 
if ($resultat){
  return true;
} else {
  return false;
}

   }
   function ConnectVisiteur($data){

    // 1- connexion BD
    $conn = connect();
 
     // 2- creation de la requette
 $mp = md5($data['mp']);
 $requette = "SELECT * FROM visiteurs WHERE email = '".$data['email']."' AND mp= '$mp' ";
 
 //3- execution de la requette
 
 $resultat = $conn ->query($requette);
 
 //4- resultat de la requette
 
 $user = $resultat->fetch();
 return ($user);
   }


   function ConnectAdmin($data){

    // 1- connexion BD
    $conn = connect();
 
     // 2- creation de la requette
 $mp = md5($data['mp']);
 $email = $data['email'];
 $requette = "SELECT * FROM administrateur WHERE email = '$email' AND mp= '$mp' ";
 
 //3- execution de la requette
 
 $resultat = $conn ->query($requette);
 
 //4- resultat de la requette
 
 $user = $resultat->fetch();
 return ($user);
   }
?>
