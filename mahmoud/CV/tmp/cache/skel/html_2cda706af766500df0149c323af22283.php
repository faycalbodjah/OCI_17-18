<?php

/*
 * Squelette : squelettes/inc/navlink.html
 * Date :      Wed, 07 Mar 2018 00:48:25 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/navlink.html
// Temps de compilation total: 0.000 ms
//

function html_2cda706af766500df0149c323af22283($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = ' <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">';

	return analyse_resultat_skel('html_2cda706af766500df0149c323af22283', $Cache, $page, 'squelettes/inc/navlink.html');
}
?>