<?php

/*
 * Squelette : ../plugins-dist/porte_plume/prive/porte_plume_preview.html
 * Date :      Wed, 21 Feb 2018 10:24:39 GMT
 * Compile :   Wed, 07 Mar 2018 12:30:46 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/porte_plume/prive/porte_plume_preview.html
// Temps de compilation total: 4.000 ms
//

function html_2378fb69aa113bdd7a53759e63acbefe($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<'.'?php header("X-Spip-Cache: 0"); ?'.'>'.'<'.'?php header("Cache-Control: no-cache, must-revalidate"); ?'.'><'.'?php header("Pragma: no-cache"); ?'.'>' .
'<'.'?php header(' . _q((	'Content-Type: text/html; charset=' .
	filtre_pp_charset(''))) . '); ?'.'>
<div class="preview">
' .
interdire_scripts(liens_absolus(filtrer('image_graver', filtrer('image_reduire',traitements_previsu(table_valeur(@$Pile[0], (string)'data', null),interdire_scripts(table_valeur(@$Pile[0], (string)'champ', null)),interdire_scripts(table_valeur(@$Pile[0], (string)'objet', null))),'500','0')))) .
'
' .
(($t1 = strval(interdire_scripts(calculer_notes())))!=='' ?
		('<hr style=\'clear:both;\' /><div class="notes">' . $t1 . '</div>') :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_2378fb69aa113bdd7a53759e63acbefe', $Cache, $page, '../plugins-dist/porte_plume/prive/porte_plume_preview.html');
}
?>