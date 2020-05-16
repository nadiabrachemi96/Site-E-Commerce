<?php
$title="Authentification";
include("header.php");

echo "<p class=\"error\">".($error??"")."</p>";
?>        
<body style="background-image: url('css/images/food-background.jpg');">
      <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Se Connecter</h1>
            <div class="account-wall">
                <form class="form-signin" method="post">
              <div class="input-group">
                      <input type="text" name="login" size="20" class="form-control" id="inputLogin" required placeholder="login"
                                   required value="<?= $data['login']??"" ?>">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>   
              </div>
               <div class="input-group">
                      <input type="password" name="password" size="20" class="form-control" required id="inputMDP"
                                   placeholder="Mot de passe">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
               </div>
               <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                </form>
            </div>
             <div class="form-group">
			    <label><input type="checkbox"> Remember me</label>
                <span class="pull-right"><a href="<?= $pathFor['adduser'] ?>">S'enregistrer</a></span>
            </div>
        </div>
    </div>
</div>
</body>
<?
include("footer.php");  
