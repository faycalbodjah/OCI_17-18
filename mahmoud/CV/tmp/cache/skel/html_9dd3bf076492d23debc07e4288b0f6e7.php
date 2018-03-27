<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_interactions.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 21 Feb 2018 12:20:33 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_interactions.html
// Temps de compilation total: 12.001 ms
//

function html_9dd3bf076492d23debc07e4288b0f6e7($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('configurer', '_interactions')?" ":""))) .
'
<h1 class="grostitre">' .
_T('public|spip|ecrire:onglet_interactivite') .
'</h1>
<div class=\'contenu_public\'>
	<h3>' .
_T('public|spip|ecrire:titre_config_contenu_public') .
'</h3>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_REDACTEURS',
	array(),
	array('../prive/squelettes/contenu/configurer_interactions.html','html_9dd3bf076492d23debc07e4288b0f6e7','',7,$GLOBALS['spip_lang'])) .
'
	</div>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_VISITEURS',
	array(),
	array('../prive/squelettes/contenu/configurer_interactions.html','html_9dd3bf076492d23debc07e4288b0f6e7','',11,$GLOBALS['spip_lang'])) .
'
	</div>

	<!--contenu_public-->
</div>

<div class=\'contenu_prive\'>
	<h3>' .
_T('public|spip|ecrire:titre_config_contenu_prive') .
'</h3>

	<!--contenu_prive-->
</div>

<div class=\'contenu_notifications\'>
	<h3>' .
_T('public|spip|ecrire:titre_config_contenu_notifications') .
'</h3>

	<div class="ajax">
		' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_ANNONCES',
	array(),
	array('../prive/squelettes/contenu/configurer_interactions.html','html_9dd3bf076492d23debc07e4288b0f6e7','',27,$GLOBALS['spip_lang'])) .
'
	</div>

	<!--contenu_notifications-->
</div>
');

	return analyse_resultat_skel('html_9dd3bf076492d23debc07e4288b0f6e7', $Cache, $page, '../prive/squelettes/contenu/configurer_interactions.html');
}
?>