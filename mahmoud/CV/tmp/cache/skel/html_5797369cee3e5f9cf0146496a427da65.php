<?php

/*
 * Squelette : squelettes/inc/educationsection.html
 * Date :      Wed, 07 Mar 2018 00:55:40 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/educationsection.html
// Temps de compilation total: 1.000 ms
//

function html_5797369cee3e5f9cf0146496a427da65($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = ' <!-- Education Section-->
          
          <li>
            <div class="timeline-image">
              <h4>2010 <br>
                - <br>
                2011 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Design University</h4>
                <h4 class="subheading">Master Degree of Design</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>2007 <br>
                - <br>
                2010 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>Design University</h4>
                <h4 class="subheading">Bachelor Degree of Design</h4>
              </div>
              <div class="timeline-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <h4>2004 <br>
                - <br>
                2007 </h4>
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>School Name</h4>
                <h4 class="subheading">High School Degree</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>';

	return analyse_resultat_skel('html_5797369cee3e5f9cf0146496a427da65', $Cache, $page, 'squelettes/inc/educationsection.html');
}
?>