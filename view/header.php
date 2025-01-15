<!--<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma page</title>
  <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="?page=accueil">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <?php
         /* if(isset($_GET["page"]) && ($_GET["page"] == "utilisateur" || $_GET["page"]=="message" || $_GET["page"]== "mesproduits" || $_GET["page"]=="ajouter")) {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="?page=utilisateur">Information utilisateur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=message">Mes Messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=mesproduits">Mes Produits</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="?page=ajouter">Vendre un produit</a>
              </li class="nav-item">
            <?php
          }else{
            ?>
              <li class="nav-item">
                <a class="nav-link" href="?page=quotidien">Quotidien</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=technologie">Technologie</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=sport">Sport</a>
              </li>
            <?php
           
            if(!isset($_SESSION['nom'])) {  
              ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=inscription">Inscription</a>
                </li>
                  
                <li class="nav-item">
                    <a class="nav-link" href="?page=connexion">Connexion</a>
                </li>
              <?php 
            } else { 
              ?>
                <li class="nav-item">
                  <a class="nav-link" href="?page=utilisateur"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="?page=panier">Mon Panier</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="?page=deconnexion">Deconnexion</a>
                </li>
              <?php
            } 
            if(isset($_GET['page']) and $_GET['page'] ==="checkout"){
              ?>
                <li>
                  <a class="nav-link" href="?page=panier">Retour</a>
                </li>
              
              <?php
            }
          }*/
        ?>
      </ul>
    </div>
  </div>
</nav>
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeTreasure</title>
    <link rel="stylesheet" href="../styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

</head>
<body>

  <nav id="navbar">
    <div id="nav-item-left">
      <a href="?page=accueil">Montres</a>
      <a href="?page=inscription">Quartz</a>
      <a href="?page=connexion">Mécaniques</a>
    </div>

    <div id="logo-navbar-container">
      <a href="?page=accueil"><img src="../img/logo.svg" alt="logo"></a>
    </div>

    <div id="nav-item-right">
      <a href="?page=profil"><img src="../img/profil.svg" alt="profil"></a>
      <a href="?page=panier"><img src="../img/panier.svg" alt="panier"></a>
    </div>
  </nav>


  <div id="features-products-all">
<div id="features-products-top-all">
<h1>Explorez toutes<br>nos montres de luxe</h1>
<p>Explorez des modèles issus des plus grandes maisons horlogères et laissez-vous séduire par l'élégance intemporelle et la précision inégalée de chaque montre.</p>
</div>

<div id="product-filter">
    <select name="category" id="category">
      <option value="all">Toutes les montres</option>
      <option value="quartz">Quartz</option>
      <option value="mecanique">Mécanique</option>
    </select>
  </div>

<div id="features-products-container">

<a href="?page=produits" id="features-products-container-item">
  <div id="features-products-container-item-img">
    <img src="../img/features-products-bottom1.webp" alt="features-products-bottom">
  </div>
  <div id="features-products-container-item-text">
    <div id="features-products-container-item-text-top">
      <p class="medium-weight-text">Montre 1</p>
      <p class="small-text">Quartz</p>
    </div>
    <div id="features-products-container-item-text-bottom">
      <p>15 000€</p>
    </div>
  </div>
</a>

<a href="?page=produits" id="features-products-container-item">
  <div id="features-products-container-item-img">
    <img src="../img/features-products-bottom2.webp" alt="features-products-bottom">
  </div>
  <div id="features-products-container-item-text">
    <div id="features-products-container-item-text-top">
      <p class="medium-weight-text">Montre 2</p>
      <p class="small-text">Mécanique</p>
    </div>
    <div id="features-products-container-item-text-bottom">
      <p>25 000€</p>
    </div>
  </div>
</a>

<a href="?page=produits" id="features-products-container-item">
  <div id="features-products-container-item-img">
    <img src="../img/features-products-bottom3.webp" alt="features-products-bottom">
  </div>
  <div id="features-products-container-item-text">
    <div id="features-products-container-item-text-top">
      <p class="medium-weight-text">Montre 3</p>
      <p class="small-text">Quartz</p>
    </div>
    <div id="features-products-container-item-text-bottom">
      <p>36 000€</p>
    </div>
  </div>
</a>

<a href="?page=produits" id="features-products-container-item">
  <div id="features-products-container-item-img">
    <img src="../img/features-products-bottom4.webp" alt="features-products-bottom">
  </div>
  <div id="features-products-container-item-text">
    <div id="features-products-container-item-text-top">
      <p class="medium-weight-text">Montre 4</p>
      <p class="small-text">Mécanique</p>
    </div>
    <div id="features-products-container-item-text-bottom">
      <p>6 000€</p>
    </div>
  </div>
</a>


</div>

</div>

</div>



<footer>
  <div id="footer-top">
    <img src="../img/logo.svg" alt="logo">
    <div id="footer-nav">
      <a href="?page=accueil">Toutes les montres</a>
      <a href="?page=inscription">Quartz</a>
      <a href="?page=connexion">Mécaniques</a>
    </div>
  </div>
  <div id="footer-bottom">
    <p>© 2025 TimeTreasure. Tous droits réservés.</p>
    <div id="footer-bottom-right">
      <a href="?page=mentions-legales">Mentions légales</a>
      <a href="?page=cgv">CGV</a>
      <a href="?page=politique-de-confidentialite">Politique de confidentialité</a>
    </div>
  </div>
</footer>