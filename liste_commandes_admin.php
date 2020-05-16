<?php   
$page_title="Liste des commandes" ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   try {
    $SQL="SELECT uid , ref , nom , date , statut FROM commandes INNER JOIN recettes ON recettes.rid = commandes.rid ORDER BY nom , date , statut";
    $res=$db->query($SQL) ;
    
    if ($res->rowCount()==0) echo '<p class="head" > Panier vide   </p>' ;
    else {
         echo '<p class="head" > Le Panier  </p>' ; 
        echo"<table> \n";
           echo "<tr><td> UID </td><td> Reference</td><td> Nom </td><td>Date</td><td>Etat de la commande</td></tr>" ;
        foreach ($res as $row){    
    echo "<tr><td> $row[uid] </td><td> $row[ref] </td><td> $row[nom] </td><td>$row[date]</td><td>$row[statut]</td></tr>" ;
  }
echo "</table> \n" ;

     
  $SQ="SELECT SUM(prix) AS prix_commandes FROM commandes INNER JOIN recettes ON recettes.rid = commandes.rid" ;
$re=$db->query($SQ) ;

 foreach ($re as $ro);
 
$SQ="SELECT SUM(prix) AS prix_supplements FROM (supplements INNER JOIN extras ON supplements.sid = extras.sid) INNER JOIN commandes on extras.cid = commandes.cid" ;
$ress=$db->query($SQ) ;

 foreach ($ress as $r) ;

 $prix_totale = $ro['prix_commandes'] + $r['prix_supplements'] ;
 
echo '<p class="head" > Le prix totale est :'.$prix_totale.' € </p>' ;
}
    
   
$db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 } 
 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
