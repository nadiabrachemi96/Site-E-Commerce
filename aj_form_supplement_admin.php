<!DOCTYPE html >
<?php
?>
<html>
  <body>
<?php 
  echo '<p class="head" > Ajouter un supplement </p>' ;
 ?>
 
 <form action="ajouter_supplement_admin.php" method="post">
 <table>
<tr><td> Nom </td><td> <input type ="text" name="nom"/></td></tr>

<tr><td> Prix </td><td> <input type ="number" step="any" name="prix"/></td></tr>
 </table>
 <input type="submit" value"Ajouter"/>
 </form>
 </body>
 </html>