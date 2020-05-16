<?php
$page_title="Modifier un produit" ;
include ("header.php") ;
require("auth/EtreAuthentifie.php");
if(!isset($_GET["rid"])){  
?>
    <div class="alert alert-warning">
      <strong> Erreur </strong> 
    </div>
<?php
} else {
    try {
        $rid=$_GET["rid"] ;
        require ("db_config.php");

    $SQL="SELECT * FROM recettes WHERE rid=?";
    $st=$db->prepare($SQL);
    $st->execute([$rid]) ;
        
    if ($st->rowCount() == 0) {
?>
    <div class="alert alert-warning">
      <strong> Erreur dans le ID </strong> 
    </div>
<?php
    } else if (!isset($_POST['nom']) || !isset($_POST['prix'])) {
        $v = $st->fetch();
        $nom = $v['nom'] ;
        $prix = $v['prix'] ;
        include ("mod_form_pizza_admin.php") ;
    } else {
        $nom=$_POST['nom'] ;
        $prix=$_POST['prix'] ;
        if($nom == "" || !is_numeric($prix) || !$prix > 0 ) {
            include ("mod_form_pizza_admin.php") ;
        }else {
           $SQL="UPDATE recettes SET nom =? , prix =?  WHERE rid =?";
            $st=$db->prepare($SQL);
            $res=$st->execute(array($nom,$prix,$rid)) ;
             if(!$res){
?>
    <div class="alert alert-warning">
      <strong> la modification n'a pas été effectuée  , Veuillez réessayer !</strong> 
    </div>
<?php
    }
            else{
?>
    <div class="alert alert-success">
      <strong> La modification a été effectuée  !</strong> 
    </div>
<?php
}
  $db= null ; 
    }
   }
  }
    catch (PDOException $e) {
        echo "Erreur SQL :".$e->getMessage();
    }
}
echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php") ;
?>
