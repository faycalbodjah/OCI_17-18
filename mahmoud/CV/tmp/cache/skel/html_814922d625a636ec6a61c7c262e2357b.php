<?php

/*
 * Squelette : ../plugins-dist/svp/modeles/svp_presenter_actions.html
 * Date :      Wed, 21 Feb 2018 10:24:39 GMT
 * Compile :   Wed, 21 Feb 2018 12:40:31 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/svp/modeles/svp_presenter_actions.html
// Temps de compilation total: 1.000 ms
//

function html_814922d625a636ec6a61c7c262e2357b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'&bull;&nbsp;' .
interdire_scripts(table_valeur(@$Pile[0], (string)'valeur', null)) .
'<br />
');

	return analyse_resultat_skel('html_814922d625a636ec6a61c7c262e2357b', $Cache, $page, '../plugins-dist/svp/modeles/svp_presenter_actions.html');
}
?>