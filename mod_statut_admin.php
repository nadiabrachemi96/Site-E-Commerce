<?php
$page_title="Modifier l'etat de la commande" ;
include ("header.php") ;
require("auth/EtreAuthentifie.php");
if(!isset($_GET["cid"])){
    echo "<p> Erreur </p> \n" ;
} else {
    try {
        $cid=$_GET["cid"] ;
        require ("db_config.php");
    $SQL="SELECT * FROM commandes WHERE cid=?";
    $st=$db->prepare($SQL);
    $st->execute([$cid]) ;
        
    if ($st->rowCount() == 0) {
        echo"<p> Erreur dans le id </p>\n" ;
    } else if ( !isset($_POST['menu_de_choix']) || empty($_POST['menu_de_choix']) )  {
    include ("mod_form_statut_admin.php") ;
    } else if ( isset($_POST['menu_de_choix']) && !empty($_POST['menu_de_choix']) )  {
           $new_statut = $_POST['menu_de_choix'] ;
            //SQL
           $SQL="UPDATE commandes SET statut =? WHERE cid =?";
            $st=$db->prepare($SQL);
            $res=$st->execute(array($new_statut,$cid)) ;
    
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
    catch (PDOException $e) {
        echo "Erreur SQL :".$e->getMessage();
    }
}
echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php") ;
?>