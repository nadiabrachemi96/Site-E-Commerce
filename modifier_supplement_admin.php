<?php
$page_title="Modifier supplements" ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   try {
    $SQL="SELECT * FROM supplements";
    $res=$db->query($SQL) ; 
    if ($res->rowCount()==0)  echo '<p class="head" > La liste est vide </p>' ; 
    else {
        echo '<p class="head" > Cliquez sur "Modifier" pour modifier un supplement  </p>' ;  
        echo "<table>";
        echo "<tr><td> Nom  </td><td> Prix </td></tr>" ;
        foreach ($res as $row){
  echo "<tr><td> $row[nom] </td><td>$row[prix] €</td><td><a href='mod_supplement_admin.php?sid=$row[sid]'>Modifier</a></td></tr>" ;
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