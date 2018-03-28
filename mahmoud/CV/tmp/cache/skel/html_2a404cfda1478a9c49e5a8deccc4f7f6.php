<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/top/documents.html
 * Date :      Wed, 21 Feb 2018 10:24:27 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:04 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/top/documents.html
// Temps de compilation total: 0.000 ms
//

function html_2a404cfda1478a9c49e5a8deccc4f7f6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<h1 class="grostitre">' .
_T('medias:documents') .
'</h1>
' .
interdire_scripts((is_string('pleine_largeur')?vide($GLOBALS['largeur_ecran']='pleine_largeur'):(isset($GLOBALS['largeur_ecran'])?$GLOBALS['largeur_ecran']:''))));

	return analyse_resultat_skel('html_2a404cfda1478a9c49e5a8deccc4f7f6', $Cache, $page, '../plugins-dist/medias/prive/squelettes/top/documents.html');
}
?>