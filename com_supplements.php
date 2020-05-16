<?php
$page_title="Commander Supplements" ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   $uid =  $idm->getUid() ;
      try {
  if(!empty($_POST['sid'])) {
  $array=$_POST['sid'] ;
    
    $SQ="SELECT MAX(cid) AS cid FROM commandes" ;
    $re=$db->query($SQ) ;
    
    foreach ($re as $row){ 
    $cid=$row['cid'] ;
    }

  foreach ($array as $selectedval) {
    $SQL="INSERT INTO extras (cid,sid) VALUES ($cid , ?)" ;
    $st=$db->prepare($SQL) ;
    $res=$st->execute(array($selectedval));

  }
  }
  
    $SQ="SELECT SUM(prix) AS prix_commandes FROM commandes INNER JOIN recettes ON recettes.rid = commandes.rid WHERE commandes.uid = $uid AND commandes.cid =(SELECT MAX(cid) FROM commandes)" ;
    $re=$db->query($SQ) ;
    foreach ($re as $ro);
    
    $SQ="SELECT SUM(prix) AS prix_supplements FROM (supplements INNER JOIN extras ON supplements.sid = extras.sid) INNER JOIN commandes on extras.cid = commandes.cid WHERE     commandes.uid=$uid AND commandes.cid =(SELECT MAX(cid) FROM commandes) " ;
    $ress=$db->query($SQ) ;
    foreach ($ress as $r) ;
    
    $prix_totale = $ro['prix_commandes'] + $r['prix_supplements'] ;

    
    $SQ="SELECT ref FROM commandes INNER JOIN recettes ON recettes.rid = commandes.rid WHERE commandes.uid = $uid AND commandes.cid =(SELECT MAX(cid) FROM commandes)" ;
    $res=$db->query($SQ) ;
    ?>
        <div class="alert alert-success">
      <strong> La commande a été effectuée!</strong> 
    </div>
<?php

     
  echo '<p class="head" > Le prix totale est :'.$prix_totale.' € </p>' ;
    
      foreach ($res as $row){ 
     echo '<p class="head" > la reference est  :'.$row['ref'].' </br> </p>' ;
    }
    
  $db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 }


 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
