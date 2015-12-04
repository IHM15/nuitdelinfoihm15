<?php
    if(isset($_SESSION['login'])){
?>

<?php
    } else {
?>
<form action="php/script/sign.php" method='POST' class="container form">
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h2>Inscription</h2>
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="mail">
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="basic-addon1" name="mdp">
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="text" class="form-control" placeholder="Nom" aria-describedby="basic-addon1" name="nom">
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="text" class="form-control" placeholder="Prénom" aria-describedby="basic-addon1" name="prenom">
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="tel" class="form-control" placeholder="Numéro de téléphone" aria-describedby="basic-addon1" name="tel">
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me" name="dv"> Cochez cette case si vous êtes déficient visuel
                </label>
            </div>
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <input type="submit" class="btn btn-primary btn-lg" value="Inscription">
        </div>
    </div>

</form>

<?php 
    }
?>