<?php 
$page_title="Supprimer supplements";
include("header.php") ;
require("auth/EtreAuthentifie.php");
if(!isset($_GET["sid"])){
    echo "<P> Erreur </P> \n";
} else if (!isset($_POST["supprimer"]) && !isset($_POST["annuler"])){
    include("del_form_supplement_admin.php") ;
}else if (isset ($_POST["annuler"])){
  ?>
    <div class="alert alert-danger">
      <strong> Opération annulée  !</strong> 
    </div>
<?php
}else {
   try {
    $sid=$_GET["sid"] ;
    require ("db_config.php");
    $SQL="DELETE FROM supplements WHERE sid=?";
    $st=$db->prepare($SQL) ;
    $st->execute([$sid]) ;
    
    if(!$st){
    ?>
    <div class="alert alert-warning">
      <strong> la suppression n'a pas été effectuée  , Veuillez réessayer !</strong> 
    </div>
<?php
    }
    else{
?>
    <div class="alert alert-success">
      <strong> La suppression a été effectuée  !</strong> 
    </div>
<?php
}
  $db= null ; 
  }
  
catch (PDOException $e){
    echo "Erreur SQL".$e->getMessage() ;
 }
}
echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include ("footer.php") ;
?>