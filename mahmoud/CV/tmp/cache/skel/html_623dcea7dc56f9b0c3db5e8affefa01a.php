<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_multilinguisme.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 21 Feb 2018 12:20:27 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_multilinguisme.html
// Temps de compilation total: 7.000 ms
//

function html_623dcea7dc56f9b0c3db5e8affefa01a($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_multilinguisme')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:info_langues') .
'</h1>
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_MULTILINGUISME',
	array(),
	array('../prive/squelettes/contenu/configurer_multilinguisme.html','html_623dcea7dc56f9b0c3db5e8affefa01a','',4,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_623dcea7dc56f9b0c3db5e8affefa01a', $Cache, $page, '../prive/squelettes/contenu/configurer_multilinguisme.html');
}
?>