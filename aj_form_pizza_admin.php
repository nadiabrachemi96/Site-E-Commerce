<!DOCTYPE html >
<?php
?>
<html>
  <body>
<?php 
  echo '<p class="head" > Ajouter une Pizza </p>' ;
 ?>
 
 <form action="ajouter_pizza_admin.php" method="post">
 <table>
<tr><td> Nom </td><td> <input type ="text" name="nom"/></td></tr>

<tr><td> Prix </td><td> <input type ="number" step="any" name="prix"/></td></tr>
 </table>
// <button type="submit" class="btn btn-success">Submit</button>
 </form>
 </body>
 </html>
