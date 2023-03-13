<?php

include "inc/functions.php";
$categories = getALLCategories();

if (!empty($_POST)){  //button search cliked
//echo $_POST ['search'];

$produits = searchProduits($_POST['search']);

}else{

  $produits = getALLProducts();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<?php

session_start();

include "inc/header.php";
?>
      <div class="row col-12">

      <?php
      foreach ($produits as $produit){
            print '<div class="row col-3">
            <div class="card" style="width: 18rem;">
                <img  class="card-img-top" src="images/'.$produit['image'].'" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">'.$produit['name'].'</h5>
                  <p class="card-text">'.$produit['description'].'</p>
                  <a href="produit.php?id= '.$produit['id'].'" class="btn btn-primary">Afficher</a>
                </div>
              </div>
        </div>';
      }
    
      

      include "inc/footer.php";
?>
        
        
     
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>