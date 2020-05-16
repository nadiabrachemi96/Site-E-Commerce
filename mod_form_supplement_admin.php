<!DOCTYPE html >
<?php
?>
<html>
    <body>

<?php
  echo '<p class="head" > Modifier  </p>' ; 
?>

<form action="" method="post">
<table>
<tr><td> Nom </td><td> <input type ="text" name="nom" value="<?php echo $nom?>"/></td></tr> 
     
<tr><td> Prix </td><td> <input type ="number" step="any" name="prix" value="<?php echo $prix?>"></td></tr> 
    
    
</table>
<input type ="submit" value="Modifier"/ >
</form>
        </body>
</html>

