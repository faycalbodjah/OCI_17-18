<?php

/*
 * Squelette : ../prive/squelettes/top/auteur.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 09:21:17 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/top/auteur.html
// Temps de compilation total: 1.000 ms
//

function html_18822cefc3f87d9793e4fc033a4a335d($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true) == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null))))) ?' ' :''))))!=='' ?
		($t1 . (	'
' .
	barre_onglets('infos_perso','infos_perso') .
	'
<style>#chemin {display: none}</style>
')) :
		'');

	return analyse_resultat_skel('html_18822cefc3f87d9793e4fc033a4a335d', $Cache, $page, '../prive/squelettes/top/auteur.html');
}
?>