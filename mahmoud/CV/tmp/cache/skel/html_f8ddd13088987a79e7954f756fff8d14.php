<?php

/*
 * Squelette : squelettes/inc/AchievementsSection.html
 * Date :      Wed, 07 Mar 2018 00:53:45 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/AchievementsSection.html
// Temps de compilation total: 0.000 ms
//

function html_f8ddd13088987a79e7954f756fff8d14($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- Achievements Section -->
<div id="achievements" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Statistiques</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
        <div class="achievement-box"> <span class="count">310</span>
          <h4>Satisfaction Client</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
        <div class="achievement-box"> <span class="count">4700</span>
          <h4>Heures de travail</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
        <div class="achievement-box"> <span class="count">30</span>
          <h4>prix remportés</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
        <div class="achievement-box"> <span class="count">8</span>
          <h4>Années d\'Experience</h4>
        </div>
      </div>
    </div>
  </div>
</div>';

	return analyse_resultat_skel('html_f8ddd13088987a79e7954f756fff8d14', $Cache, $page, 'squelettes/inc/AchievementsSection.html');
}
?>