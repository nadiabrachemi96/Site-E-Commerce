<?php
$title="Ajout de l'utilisateur";
include("header.php");
?>
<p class="error"><?= $error??""?></p>

    <div class="container">

<div class="row">
<div class="col-md-offset-2 col-md-8">
<h1> Inscription <br/> <small> Merci de renseigner vos informations </small></h1>
</div>
</div>

<form method="post">

<div class="row">
<div class="col-md-offset-2 col-md-3">
<div class="form-group">
                         <label for="inputNom" class="control-label">Nom</label></td>
                         <td><input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom" required value="<?= $data['nom']??""?>">
</div>
</div>
<div class="col-md-offset-1 col-md-3">
<div class="form-group">
                          <label for="inputPrenom" class="control-label">Prénom</label></td>
                          <td>  <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prénom" required aria-required="true" value="<?= $data['prenom']??""?>">
</div>
</div>
</div>

<div class="row">
<div class="col-md-offset-2 col-md-7">
<div class="form-group">
                            <label for="inputLogin" class="control-label">Login</label></td>
                            <td><input type="text" name="login" class="form-control" id="inputLogin" placeholder="login" required value="<?= $data['login']??""?>">
</div>
</div>
</div>

<div class="row">
<div class="col-md-offset-2 col-md-3">
<div class="form-group">
                            <label for="inputMDP" class="control-label">MDP</label></td>
                            <td><input type="password" name="mdp" class="form-control" id="inputMDP" placeholder="Mot de passe" required value="">
</div>
</div>
<div class="col-md-offset-1 col-md-3">
<div class="form-group">
                            <label for="inputMDP2" class="control-label">Répéter MDP</label></td>
                            <td><input type="password" name="mdp2" class="form-control" id="inputMDP" placeholder="Répéter le mot de passe" required value="">
</div>
</div>
</div>



<br/>
<div class="row">
<div class="col-md-offset-5 col-md-1">
      <button type="submit" class="btn btn-success">S'enregistrer</button>
</div>
</div>

</form>
</div>
<?php

include("footer.php");

