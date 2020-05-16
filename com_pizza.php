<?php 
$page_title="Commande pizza";
include("header.php") ;
require("auth/EtreAuthentifie.php");
if(!isset($_GET["rid"])){
    echo "<P> Erreur </P> \n";
} else if (!isset($_POST["ajouter"]) && !isset($_POST["annuler"])){
    include("commande_form_pizza.php") ;
}else if (isset ($_POST["annuler"])){
 {
    ?>
    <div class="alert alert-danger">
      <strong> Commande annulée </strong> 
    </div>
<?php
    }
}else {
   try { 
    require ("db_config.php");
    
    $reference= rand () ;
    $uid = $idm->getUid() ;
    $rid=$_GET["rid"] ;
    $date = date("Y-m-d H:i:s");
  
    
    $SQL="INSERT INTO commandes (ref,uid,rid,date) VALUES($reference,$uid,$rid,'$date')" ;
    $st=$db->prepare($SQL) ;
    $res=$st->execute(array());
       
    if(!$res){
    ?>
    <div class="alert alert-warning">
      <strong> Commande n'est pas passée , Veuillez réessayer !</strong> 
    </div>
<?php
    }
    else{
?>
    <div class="alert alert-success">
      <strong> La commande a été effectuée !</strong> 
    </div>
<?php

?>
    <div class="alert alert-info">
      <strong> <a href='affiche_commande_supplement.php'> Appuyez </a> pour commander des supplements  </strong> 
    </div>
<?php

    }

$db=null ;
}
catch (PDOException $e){
    echo "Erreur SQL".$e->getMessage() ;
 }
}

echo "</br>" ;
echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include ("footer.php") ;
?>
