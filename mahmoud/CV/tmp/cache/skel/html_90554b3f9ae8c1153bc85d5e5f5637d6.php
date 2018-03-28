<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_preferences.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 12:34:12 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_preferences.html
// Temps de compilation total: 28.001 ms
//

function html_90554b3f9ae8c1153bc85d5e5f5637d6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- <h1 class="grostitre">' .
_T('public|spip|ecrire:icone_mes_preferences') .
'</h1> -->
<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREFERENCES',
	array(),
	array('../prive/squelettes/contenu/configurer_preferences.html','html_90554b3f9ae8c1153bc85d5e5f5637d6','',3,$GLOBALS['spip_lang'])) .
'
</div>

<div class="ajax">
	' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_PREFERENCES_MENUS',
	array(),
	array('../prive/squelettes/contenu/configurer_preferences.html','html_90554b3f9ae8c1153bc85d5e5f5637d6','',7,$GLOBALS['spip_lang'])) .
'
</div>');

	return analyse_resultat_skel('html_90554b3f9ae8c1153bc85d5e5f5637d6', $Cache, $page, '../prive/squelettes/contenu/configurer_preferences.html');
}
?>