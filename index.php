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

    <title>Titre du site</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <!-- Client-side less -->
    <link rel="stylesheet/less" type="text/css" href="css/classic.less">
    <script src="js/less.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        less.watch();
    </script>
</head>

<body role="document">
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
                <a class="navbar-brand" href="#">Titre du site</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <!-- TODO : variable PHP to display profile
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo profile_name; ?><span class="caret"></span></a>
                        -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mon profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

<!-- Routage en mode YOLO -->
<?php

  $page = $_GET['p'];
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
      default : include("html/login.php");
        break;
    }
  } else {
    // TODO : Prepare an error
    include("html/login.php");
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
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>