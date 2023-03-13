<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">E-SHOP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <?php
                 foreach($categories as $categorie){
                  print '  <a class="dropdown-item" href="#">'.$categorie['nom'].'</a>';
                 }

               ?>
      
              </div>
            </li>
<?php
if (isset ($_SESSION['nom'])){
print '<li class="nav-item active">
<a class="nav-link" href="profile.php">profile<span class="sr-only">(current)</span></a>
</li>';
}else {
  print '<li class="nav-item active">
  <a class="nav-link" href="connexion.php">connexion<span class="sr-only">(current)</span></a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="registre.php">registre <span class="sr-only">(current)</span></a>
</li>';
}
?>
     
          </ul>
          <form class="form-inline my-2 my-lg-0" action ="index.php" method = "POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name= "search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

<?php
if (isset($_SESSION['nom'])){
  print '<a href="deconnexion.php" class= "btn btn-primary">Déconnexion</a>';

}

?>

          </form>
        </div>
      </nav>