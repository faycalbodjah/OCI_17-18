<?php

/*
 * Squelette : ../prive/squelettes/navigation/auteur_edit.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 09:20:30 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/auteur_edit.html
// Temps de compilation total: 0.000 ms
//

function html_49803520de3b762584f49bb0c4c28813($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_49803520de3b762584f49bb0c4c28813', $Cache, $page, '../prive/squelettes/navigation/auteur_edit.html');
}
?>