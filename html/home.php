
 <?php
 require_once ('php/model/PDOSingleton.php');
?>

 <div id="popAddEvenement">
     <?php include("html/createEvent.php"); ?>
 </div>
 <!-- header d'acceuil -->
 <title> Accueil </title>
  <div class="jumbotron">
        <h1>Urgence et Réseaux sociaux </h1>
        <p></br> c'est ici qu'il faut venir en cas d'attaque d'alien,d'invasion zombie ou autre catastrophe naturelle</p>
  </div>

 <!-- PARTIE  ALERTE -->
    <div class="page-header">
        <h1>Derniers Alerts</h1>
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
        <h1>MAP des evenements</h1>

      </div>
      <div id="map-container">

      <div id="map"></div>

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
<<<<<<< HEAD
           '.$evt['resumer'].'
            </div></div></div> '
        );
      }     
  ?>
  
</div>
</div>
=======
             Nabilla nous explique sa méthode pour lire un livre quand il n'y à pas d'image
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Tsunamie en indonnesie</h3>
            </div>
            <div class="panel-body">
              Chuck norris en vacances trouvait qu'il n'y avait pas assez de vague et souffle dans l'ocean
            </div>
          </div>
      </div>


>>>>>>> back

