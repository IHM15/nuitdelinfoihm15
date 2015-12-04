
 <?php
 require_once ('php/model/PDOSingleton.php');
?>

 <!-- header d'acceuil -->
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

