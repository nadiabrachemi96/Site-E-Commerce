<?php
$page_title="Modifier un supplement" ;
include ("header.php") ;
require("auth/EtreAuthentifie.php");
if(!isset($_GET["sid"])){
    echo "<p> Erreur </p> \n" ;
} else {
    try {
        $sid=$_GET["sid"] ;
        require ("db_config.php"); 
        //SQL
    $SQL="SELECT * FROM supplements WHERE sid=?";
    $st=$db->prepare($SQL);
    $st->execute([$sid]) ;
        
    if ($st->rowCount() == 0) {
        echo"<p> Erreur dans le id </p>\n" ;
    } else if (!isset($_POST['nom']) || !isset($_POST['prix'])) {
        $v = $st->fetch();
        $nom = $v['nom'] ;
        $prix = $v['prix'] ;
        include ("mod_form_supplement_admin.php") ;
    } else {
        $nom=$_POST['nom'] ;
        $prix=$_POST['prix'] ;
        if($nom == "" || !is_numeric($prix) || !$prix > 0 ) {
            include ("mod_form_supplement_admin.php") ;
        }else {
            //SQL
           $SQL="UPDATE supplements SET nom =? , prix =?  WHERE sid =?";
            $st=$db->prepare($SQL);
            $res=$st->execute(array($nom,$prix,$sid)) ;
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
