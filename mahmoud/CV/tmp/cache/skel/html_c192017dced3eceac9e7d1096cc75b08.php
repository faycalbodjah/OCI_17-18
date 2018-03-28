<?php

/*
 * Squelette : squelettes/inc/openbody.html
 * Date :      Wed, 07 Mar 2018 00:57:58 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/openbody.html
// Temps de compilation total: 1.000 ms
//

function html_c192017dced3eceac9e7d1096cc75b08($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">';

	return analyse_resultat_skel('html_c192017dced3eceac9e7d1096cc75b08', $Cache, $page, 'squelettes/inc/openbody.html');
}
?>