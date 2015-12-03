<?php
        if(isset($_SESSION['login'])){
    ?>
    
    <?php
        } else {
    ?>
    <form action="demo_form.asp" class="container form">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <h2>Connexion</h2>
            </div>
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="text" class="form-control" placeholder="Identifiant" aria-describedby="basic-addon1" name="login">
            </div>
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="basic-addon1" name="motDePasse">
            </div>
            <div class="col-xs-offset-2 col-xs-8 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="submit" class="btn btn-primary btn-lg" value="Connexion">
            </div>
        </div>

    </form>

    <?php 
        }
    ?>