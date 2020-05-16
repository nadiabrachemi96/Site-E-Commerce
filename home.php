<?php

require("auth/EtreAuthentifie.php");

$title = 'Accueil';
include("header.php");




//echo "Escaped values: ".$e_($ci->idm->getIdentity());

$role = $idm->getRole() ;
if (strcmp ($role , "user") == 0 ){
echo "</br>" ;
?>
<div class="panel panel-default">
  <div class="panel-heading">
  <?php echo "Bienvenue :  " . $idm->getIdentity() ;
  echo "</br>" ;
  echo "Votre ID est : ". $idm->getUid();
  
  ?>
  <a href="<?= $pathFor['logout'] ?>" class="btn btn-danger pull-right" role="button">Log Out </a>
  </div>
</div>

<?php
include ("principale_utilisateur.php") ;
?>

<script>
alert($role); 
</script>
<?php

} else if (strcmp ($role , "admin") == 0 ){
include ("principale_admin.php") ;
}


include("footer.php");


