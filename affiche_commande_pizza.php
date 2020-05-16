<?php 
$page_title="Liste des produits" ;
include("header.php") ;

require("auth/EtreAuthentifie.php");
   try {
    $SQL="SELECT * FROM recettes";
    $res=$db->query($SQL) ;
    if ($res->rowCount()==0)   echo '<p class="head" > La liste  est vide </p>' ; 
    else {
        echo '<p class="head" > La liste des questions : </p>' ; 
        echo "<table> \n";
     echo "<tr><td> Nom </td></tr>" ;
        foreach ($res as $row){  
    echo "<tr><td> $row[nom] </td></tr>" ;
   }
  }
echo "</table> " ;


$db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 } 

 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
