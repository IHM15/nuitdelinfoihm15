<?php
require_once('php/model/PDOSingleton.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


<!-- Routage en mode YOLO -->
<?php

  if(isset( $_GET['p'])) {
    $page = $_GET['p'];
    switch($page) {


         
      case "home" : echo'<title> accueil </title>';
        break;
      case "login" : echo'<title> Connection </title>';
        break;
      case "signup" : echo'<title> Enregistrement </title>';
        break;
      case "create-event" :  echo'<title> creation d\'evenemtent </title>';
        break;
       case "help" : echo'<title> aide </title>';  
         break;
      default : echo'<title> Urgence et Réseaux sociaux  </title>';
        break;
    }
  } 
?>


    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="css/popAddEventCss.css"  rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Client-side less -->
    <?php
    if (isset($_COOKIE['sw']) &&  $_COOKIE['sw'] == 'theforce') {
        echo('<link href="css/themes.sw.css" rel="stylesheet">');
        setcookie('sw','theforce',time()-1);
        echo('<script type="text/javascript">
                document.cookie =
        "sw=theforce; expires=Fri, 3 Aug 2001 20:47:11 UTC; path=/";
        </script>');
    }
    else {
        echo ('<link class="cssToChange" rel="stylesheet/less" type="text/css" href="css/classic.less">
        <script class="cssToChange" src="js/less.min.js" type="text/javascript"></script>
        <script  class="cssToChange" type="text/javascript">
        less.watch();
        </script>');
    }

    ?>


</head>

<body role="document">
<script src="js/three.min.js"></script>
<script src="js/app.js"></script>
<script src="js/ColladaLoader.js"></script>
<script src="js/OrbitControls.js"></script>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- TODO : ajouter le logo
                <img alt="Brand" src="...">
                 -->
                <a class="navbar-brand" href="#">Incredibly Heroic Media</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="?p=home">Home<span class="sr-only">(current)</span></a></li>
                    <li class="active"><a href="?p=help">Help<span class="sr-only"></span></a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>

      <p>
        <button type="button" class="btn btn-lg btn-default"  onclick="self.location.href='index.php?p=login'">Connexion</button>
        <button type="button" class="btn btn-lg btn-primary"  onclick="self.location.href='index.php?p=signup'">S'enregistrer</button>
      </p>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<!-- Routage en mode YOLO -->
<?php


  if (isset($_GET['p'])) {
      $page = $_GET['p'];
  }

  if(isset($page)) {
    switch($page) {
      case "home" : include("html/home.php");
        break;
      case "login" : include("html/login.php");
        break;
      case "signup" : include("html/signup.php");
        break;
      case "create-event" : include("html/createEvent.php");
        break;
           case "help" :include("html/help.html");
           break;
      default :
          $page = 'home';
          include("html/home.php");

        break;
    }
  } else {
    $page = 'home';
    include("html/home.php");
  }
?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="js/docs.min.js"></script>
<?php if($page == "home" ) { 
    include_once("html/map.php");
    ?>
    <script src="js/keyboard.js"></script>

<?php } ?>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/addevenement.js"></script>
    <script src="js/konami.js"></script>
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>