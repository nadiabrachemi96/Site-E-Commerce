
<?php
$page_title="Gestion produits ; page principale";
include("header.php") ;
?>

<a href="<?= $pathFor['logout'] ?>" class="btn btn-danger " role="button">Log Out </a>
<?php
echo "</br>" ;
?>

  <style>
  body {
      position: relative; 
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-color:#673ab7;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #FFB6C1;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Bonjour Admin</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Gestion des Pizzas</a></li>
          <li><a href="#section2">Gestion des Supplements</a></li>
          <li><a href="#section3">Gestion des commandes</a></li>
          <li> <a href="<?= $pathFor['logout'] ?>" class="btn btn-danger " role="button">Log Out </a><li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">
  <a href="liste_pizza_admin.php"> Afficher la liste des pizzas </a> <br/>    
<a href="ajouter_pizza_admin.php" > Ajouter une pizza </a>  <br/>
<a href="supprimer_pizza_admin.php"> Supprimer une pizza </a>  <br/>
<a href="modifier_pizza_admin.php" > Modifier une pizza</a>  <br/>

</div>
<div id="section2" class="container-fluid">
  <a href="liste_supplement_admin.php"> Afficher la liste des supplements </a> <br/>
<a href="ajouter_supplement_admin.php" > Ajouter un supplement </a>  <br/>
<a href="supprimer_supplement_admin.php"> Supprimer un supplement</a>  <br/>
<a href="modifier_supplement_admin.php" > Modifier un supplement</a>  <br/> 
</div>
<div id="section3" class="container-fluid">
<a href="liste_commandes_admin.php"> Afficher la liste des commandes </a> <br/>
<a href="modifier_afficher_statut_admin.php"> Changer l'état d'une commande </a> <br/>
</div>

<?php
include ("footer.php");
?>
