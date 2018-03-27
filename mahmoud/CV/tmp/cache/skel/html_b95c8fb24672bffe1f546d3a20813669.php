<?php

/*
 * Squelette : ../prive/squelettes/top/infos_perso.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 12:34:20 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/infos_perso.html
// Temps de compilation total: 1.000 ms
//

function html_b95c8fb24672bffe1f546d3a20813669($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = sinon_interdire_acces('',interdire_scripts(invalideur_session($Cache, replace(generer_url_entite(table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null),'auteur'),'&amp;','&'))));

	return analyse_resultat_skel('html_b95c8fb24672bffe1f546d3a20813669', $Cache, $page, '../prive/squelettes/top/infos_perso.html');
}
?>