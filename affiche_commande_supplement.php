<?php 
$page_title="Commander un supplement " ;
include("header.php") ;
require("auth/EtreAuthentifie.php");
   try {
     $SQL="SELECT * FROM supplements";
    $res=$db->query($SQL) ;
    if ($res->rowCount()==0) echo '<p class="head" > La liste des supplements est vide </p>' ; 
    else{
?> 
        <form action ="com_supplements.php" method ="post" >
        
        <?php 
      echo '<p class="head" > La liste des Supplements : </p>' ; 
        
        echo "<table> \n";
          echo "<tr><td> Nom </td><td>Prix</td></tr>" ;
        foreach ($res as $row){ 
?>
      <tr>
      
      <td><?php echo $row['nom'] ; ?></td>
      <td><?php echo $row['prix'] .'€' ;?></td>
      <td> <input type ="checkbox" name="sid[]" value="<?php echo $row['sid'] ;?>"> </td>
      </tr>
      
<?php };
        echo "</table> \n" ;
?>

      <input type="submit" value ="Ajouter au panier">
      </form>
      
 <?php     
    }
$db=null ;
}
catch(PDOException $e){
echo"Erreur SQL :".$e->getMessage();
 } 
 echo "<a href='home.php'> Revenir </a> à la page d'acceuil ";
include("footer.php");
?>
