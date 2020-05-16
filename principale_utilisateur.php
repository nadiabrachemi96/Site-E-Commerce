
<?php
$page_title="Gestion produits ; page principale";
include("header.php") ;
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="css/images/panier.jpg" alt="Image" >
        <div class="carousel-caption">
          <h3><a href="liste_pizza_supplements_utilisateur.php"> Afficher la liste des pizzas et des supplements </a></h3>
          <p> Découvrez la liste de nos pizzas </p>
        </div>      
      </div>

      
      <div class="item">
        <img src="css/images/pizza.jpg" alt="Image">
        <div class="carousel-caption">
          <h3><a href="affiche_commande_pizza.php"> Passer une commande  </a></h3>
          <p>Passez votre commande </p>
        </div>      
      </div>
      
      
      <div class="item">
        <img src="css/images/encart_panier.gif" alt="Image" >
        <div class="carousel-caption">
          <h3><a href="liste_commandes_utilisateur.php"> liste des commandes  </a></h3>
          <p>Consultez votre panier </p>
        </div>      
      </div>
    </div>
    
  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
</footer>

<?php
include ("footer.php");
?>
