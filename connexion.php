
<?php

include "inc/functions.php";
$categories = getALLCategories();
$user = true;
if (!empty($_POST))// button sauvegarder clicked
{ 
$user =  ConnectVisiteur($_POST);
if (count($user) > 0){ // utilisateur connecté
   
  session_start();
  $_SESSION['email'] = $user['email'];
  $_SESSION['nom'] = $user['nom'];
  $_SESSION['prenom'] = $user['prenom'];
  $_SESSION['mp'] = $user['mp'];
  $_SESSION['telephone'] = $user['telephone'];
  
  header ('location: profile.php'); //redirection vers la page profile
}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
  </head>
<body>
   <?php
    include "inc/header.php";
   ?>
      <div class="col-12 p-5">

        <h1 class="text-center">Connexion</h1>
      <form action ="connexion.php" method= "post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name = "mp" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>

        <button type="submit" class="btn btn-primary">Connecter</button>

      </form>

      <div class="bg-dark text-center p-5 mt-4">
       <p  class="text-white">Tous les droits sont reserves 2023</p>
      </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script> src= "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.js"</script>
 <?php
 if ( !$user){
 print "
 <script>
 Swal.fire({
  title: 'Error!',
  text: 'Do you want to continue',
  icon: 'error',
  confirmButtonText: 'Cool'
})
</script>
";
}
?>
</html>