<?php

/*
 * Squelette : squelettes/inc/skillssection.html
 * Date :      Wed, 07 Mar 2018 00:51:14 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/skillssection.html
// Temps de compilation total: 0.000 ms
//

function html_adb27223f167497812ae2eac82ad0abe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- Skills Section -->
<div id="skills" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Skills</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="95"> <span class="percent">95</span> </span>
        <h4>HTML5</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="85"> <span class="percent">85</span> </span>
        <h4>CSS3</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>jQuery</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="80"> <span class="percent">80</span> </span>
        <h4>WordPress</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="70"> <span class="percent">70</span> </span>
        <h4>Photoshop</h4>
      </div>
      <div class="col-md-4 col-sm-6 skill"> <span class="chart" data-percent="65"> <span class="percent">65</span> </span>
        <h4>Illustrator</h4>
      </div>
    </div>
  </div>
</div>';

	return analyse_resultat_skel('html_adb27223f167497812ae2eac82ad0abe', $Cache, $page, 'squelettes/inc/skillssection.html');
}
?>