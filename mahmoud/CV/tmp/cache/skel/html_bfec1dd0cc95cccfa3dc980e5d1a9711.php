<?php

/*
 * Squelette : squelettes/inc/linkaboutsection.html
 * Date :      Wed, 07 Mar 2018 00:49:32 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/linkaboutsection.html
// Temps de compilation total: 0.000 ms
//

function html_bfec1dd0cc95cccfa3dc980e5d1a9711($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = ' <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="#about">A propos</a> </li>
          <li> <a class="page-scroll" href="#skills">Competences</a> </li>
          <li> <a class="page-scroll" href="#portfolio">Portefeuille</a> </li>
          <li> <a class="page-scroll" href="#resume">CV</a> </li>
          <li> <a class="page-scroll" href="#contact">Contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>';

	return analyse_resultat_skel('html_bfec1dd0cc95cccfa3dc980e5d1a9711', $Cache, $page, 'squelettes/inc/linkaboutsection.html');
}
?>