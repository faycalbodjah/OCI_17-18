<?php

/*
 * Squelette : ../prive/squelettes/top/plan.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:38 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/plan.html
// Temps de compilation total: 1.000 ms
//

function html_9472376386cfe06cfa3ec2ee04586198($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1>' .
_T('public|spip|ecrire:plan_site') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_9472376386cfe06cfa3ec2ee04586198', $Cache, $page, '../prive/squelettes/top/plan.html');
}
?>