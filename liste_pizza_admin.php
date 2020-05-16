<?php    
$page_title="Liste des pizzas" ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   try {
    $SQL="SELECT * FROM recettes";
    $res=$db->query($SQL) ;
    if ($res->rowCount()==0)   echo '<p class="head" > La liste est vide  </p>' ; 
    else {
          echo '<p class="head" > La liste des Pizzas : </p>' ; 
        echo"<table> \n";
          echo "<tr><td> Nom </td><td>Prix</td></tr>" ;
        foreach ($res as $row){    
    echo "<tr><td> $row[nom] </td><td>$row[prix] €</td></tr>" ;
  }
echo "</table> \n" ;    
    }
$db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 } 
 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
