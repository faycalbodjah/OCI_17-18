<?php

/*
 * Squelette : squelettes/inc/resumesection.html
 * Date :      Wed, 07 Mar 2018 00:54:48 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/resumesection.html
// Temps de compilation total: 0.000 ms
//

function html_b49902663de964dcd6b1473223c43424($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<!-- Resume Section -->
<div id="resume" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Experience</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <h4>Feb 2013 <br>
                - <br>
                Present </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">UX Developer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Nov 2011 <br>
                - <br>
                Jan 2013 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">Front-end Developer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>Dec 2009 <br>
                - <br>
                May 2011 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Creative Agency</h4>
                <h4 class="subheading">UX Designer</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title center">
      <h2>Education</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">';

	return analyse_resultat_skel('html_b49902663de964dcd6b1473223c43424', $Cache, $page, 'squelettes/inc/resumesection.html');
}
?>