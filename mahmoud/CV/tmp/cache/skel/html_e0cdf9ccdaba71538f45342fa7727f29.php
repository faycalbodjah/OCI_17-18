<?php

/*
 * Squelette : squelettes/test.html
 * Date :      Wed, 21 Feb 2018 12:43:24 GMT
 * Compile :   Wed, 21 Feb 2018 12:43:58 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/test.html
// Temps de compilation total: 0.000 ms
//

function html_e0cdf9ccdaba71538f45342fa7727f29($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 'toto';

	return analyse_resultat_skel('html_e0cdf9ccdaba71538f45342fa7727f29', $Cache, $page, 'squelettes/test.html');
}
?>