<?php

/*
 * Squelette : ../prive/squelettes/contenu/configurer_langage.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 12:34:18 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/configurer_langage.html
// Temps de compilation total: 10.000 ms
//

function html_5e2d41d5ad4ef5f9c73866340c1e6d06($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- <h1 class="grostitre">' .
_T('public|spip|ecrire:icone_ma_langue') .
'</h1> -->
' .
executer_balise_dynamique('FORMULAIRE_CONFIGURER_LANGAGE',
	array(),
	array('../prive/squelettes/contenu/configurer_langage.html','html_5e2d41d5ad4ef5f9c73866340c1e6d06','',2,$GLOBALS['spip_lang'])));

	return analyse_resultat_skel('html_5e2d41d5ad4ef5f9c73866340c1e6d06', $Cache, $page, '../prive/squelettes/contenu/configurer_langage.html');
}
?>