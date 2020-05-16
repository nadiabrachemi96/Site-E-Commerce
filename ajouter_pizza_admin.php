<?php 
$page_title="Ajouter une pizza";
include("header.php");
require("auth/EtreAuthentifie.php");
if(!isset($_POST['nom']) || !isset($_POST['prix']) )  {
    include("aj_form_pizza_admin.php");
}else {
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
if($nom == "" ||!is_numeric($prix)) {
    include("aj_form_pizza_admin.php");
 } else {
     try {
    $SQL="INSERT INTO recettes (nom,prix) VALUES(?,?)" ;
    $st=$db->prepare($SQL) ;
    $res=$st->execute(array($nom ,$prix));
    
    if(!$res){
    ?>
    <div class="alert alert-warning">
      <strong> l'ajout n'a pas été effectué  , Veuillez réessayer !</strong> 
    </div>
<?php
    }
    else{
?>
    <div class="alert alert-success">
      <strong> L'ajout a été effectué  !</strong> 
    </div>
<?php
}
  $db= null ; 
  }
catch (PDOException $e) {
echo "ErreurSQL :".$e->getMessage() ;
  }
 }
}
echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
