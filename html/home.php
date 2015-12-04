
 <?php
 require_once ('php/model/PDOSingleton.php');
?>

 <div id="popAddEvenement">
     <?php include("html/createEvent.php"); ?>
 </div>
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


<!-- alerte
      <div class="alert alert-success" role="alert">
        <strong>Warning!</strong> Du Pierre Billon est diffusé dans les rues de Los Angeles par erreur!Hollande présente ces escusse au citoyen americain ; Du Pierre Billon est diffusé dans les rues de Los Angeles par erreur!Hollande présente ces escusse au citoyen americain
      </div>
      <div class="alert alert-info" role="alert"
        <strong>Alerte Meteo</strong> Demain un rayon de soleil devrait apparaitre de 12h01 à 12h03 en bretagne,prévoire de la créme solaire
      </div>
      <div class="alert alert-warning" role="alert">
        <strong>Warning!</strong> Stephanie de monaco a annoncer reprendre la chanson française!des boule quiess son distribuer gratuitement dans toute les pharmacies
      </div>
     </div>
-->


 <!-- PARTIE  MAP -->
      <div class="page-header">
        <h1>MAP des evenements</h1>
      </div>
      
      <div id="map"></div>
      <div>
          <button id="addevenemnt" type="button" class="btn btn-lg btn-default">Ajouter Evenement</button>
      </div>
      <!-- PARTIE  PANEL -->
      <div class="page-header">
        <h1>informations</h1>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Miss France</h3>
            </div>
            <div class="panel-body">
              Comment se proteger de jp foucault lorsque l'ont candidate pour les miss France
            </div>
          </div>
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">les livres à la porter de tous</h3>
            </div>
            <div class="panel-body">
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
  -->



