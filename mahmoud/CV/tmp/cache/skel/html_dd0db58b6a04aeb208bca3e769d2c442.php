<?php

/*
 * Squelette : ../prive/squelettes/navigation/article_edit.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 21 Feb 2018 12:11:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/navigation/article_edit.html
// Temps de compilation total: 0.000 ms
//

function html_dd0db58b6a04aeb208bca3e769d2c442($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '';

	return analyse_resultat_skel('html_dd0db58b6a04aeb208bca3e769d2c442', $Cache, $page, '../prive/squelettes/navigation/article_edit.html');
}
?>