<?php  
$page_title="Modifier le statut d'une commande" ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   try {
    $SQL="SELECT * FROM commandes";
    $res=$db->query($SQL) ;
    if ($res->rowCount()==0)  echo '<p class="head" > Le panier est vide  </p>' ;
    else {
    echo '<p class="head" > la liste des commandes </p>' ; 
        echo"<table>";
          echo "<tr><td> Reference </td><td> Date </td><td> Statut </td></tr>" ;
        foreach ($res as $row){
  echo "<td>$row[ref]</td><td>$row[date]</td><td>$row[statut]</td><td><a href='mod_statut_admin.php?cid=$row[cid]'>Modifier</a></td></tr>" ;
  }
echo "</table>" ;
    }
$db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 } 
 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?> 
