<?php

/*
 * Squelette : ../prive/squelettes/inclure/pied.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 21 Feb 2018 11:53:49 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/inclure/pied.html
// Temps de compilation total: 3.000 ms
//

function html_e33636cc23758c210fbbc06a03090832($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 86400"); ?'.'>' .
'<div id=\'copyright\'>
	' .
info_maj_spip('') .
'
	' .
info_copyright('') .
'
	' .
vide($Pile['vars'][$_zzz=(string)'home_server'] = interdire_scripts(concat(table_valeur(eval('return '.'$GLOBALS'.';'),'home_server'),'/',interdire_scripts(table_valeur(eval('return '.'$GLOBALS'.';'),'spip_lang'))))) .
'
	<p>' .
_T('public|spip|ecrire:info_copyright_doc', array('spipnet' => table_valeur($Pile["vars"], (string)'home_server', null),
'spipnet_affiche' => table_valeur($Pile["vars"], (string)'home_server', null))) .
'</p>
</div>
' .
html_tests_js(''));

	return analyse_resultat_skel('html_e33636cc23758c210fbbc06a03090832', $Cache, $page, '../prive/squelettes/inclure/pied.html');
}
?>