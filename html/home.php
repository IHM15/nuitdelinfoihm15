
 <?php
 require_once ('php/model/PDOSingleton.php');
?>

 <div id="popAddEvenement">
     <?php include("html/createEvent.php"); ?>
 </div>
 <!-- header d'accueil -->
 <title> Accueil </title>
  <div class="jumbotron">
        <!-- intégration du logo en 3D -->
        <!-- TODO : include deathstar quand on a le style star wars -->
        <?php include("earth.html"); ?>

        <h1>Urgence et R&eacute;seaux sociaux </h1>
        <p></br>C'est ici qu'il faut venir en cas d'attaque d'alien, d'invasion de zombies ou autre catastrophes naturelles...</p>
  </div>

 <!-- PARTIE  ALERTE -->
    <div class="page-header">
        <h1>Derni&egrave;res alertes</h1>
      </div>
      <?php
      $pdo=PDOSingleton::getInstance();
      $alerts=$pdo->getThreeLastMessages();
      foreach ($alerts as $alert) {
      	echo('<div class="alert alert-success" role="alert">
        <strong>Warning!</strong> '.$alert['txt'].'
      	</div>');	
      }     
?>




 <!-- PARTIE  MAP -->
      <div class="page-header">
        <h1>MAP des &eacute;v&egrave;nements</h1>

      </div>
      <div id="map-container">

      <div id="map"></div>
      <div class="map-helper panel panel-primary">
        <p>H - Afficher les hopitaux </p>
        <p>A - Afficher les attentats</p>
        <p>E - Afficher les epidemies</p>
        <p>C - Afficher les catastrophes naturelles</p>
        <p>P - Afficher les pandemies</p>
        <p>I - Afficher les incendies</p>
        <p>U - Afficher les centres d’urgences</p>
      </div>
      <div>
          <button id="addevenemnt" type="button" class="btn btn-lg btn-default">Ajouter Evenement</button>
      </div>
      <!-- PARTIE  PANEL -->
      <div class="page-header">
        <h1>informations</h1>
      </div>
     <div class="row">   
  <?php
      $evts=$pdo->getThreeLastEvents();
      foreach ($evts as $evt) {
        echo('
           <div class="col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">'.$evt['nom_evt'].'</h3>
            </div>
            <div class="panel-body">
           '.$evt['resumer'].'
            </div></div></div> '
        );
      }     
  ?>
  
</div>
</div>

