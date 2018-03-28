<?php

/*
 * Squelette : ../prive/squelettes/inclure/configurer.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 12:35:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/configurer.html
// Temps de compilation total: 2.000 ms
//

function html_973a5562e95e62db317a8c716feb67a7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('bouton', interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true))))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
<div class="ajax">
	' .
	executer_balise_dynamique('FORMULAIRE_',
	array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'configurer', null),true))),
	array('../prive/squelettes/inclure/configurer.html','html_973a5562e95e62db317a8c716feb67a7','',3,$GLOBALS['spip_lang'])) .
	'
</div>
')) :
		'');

	return analyse_resultat_skel('html_973a5562e95e62db317a8c716feb67a7', $Cache, $page, '../prive/squelettes/inclure/configurer.html');
}
?>