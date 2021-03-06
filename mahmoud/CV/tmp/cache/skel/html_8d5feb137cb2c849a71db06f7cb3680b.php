<?php

/*
 * Squelette : ../plugins-dist/svp/formulaires/inc-select_depot.html
 * Date :      Wed, 21 Feb 2018 10:24:39 GMT
 * Compile :   Wed, 21 Feb 2018 12:21:44 GMT
 * Boucles :   _depots
 */ 

function BOUCLE_depotshtml_8d5feb137cb2c849a71db06f7cb3680b(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'depots';
		$command['id'] = '_depots';
		$command['from'] = array('depots' => 'spip_depots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("depots.titre",
		"depots.id_depot");
		$command['orderby'] = array('depots.titre');
		$command['where'] = 
			array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/svp/formulaires/inc-select_depot.html','html_8d5feb137cb2c849a71db06f7cb3680b','_depots',3,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	<option' .
(($t1 = strval($Pile[$SP]['id_depot']))!=='' ?
		(' value="' . $t1 . '"') :
		'') .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'depot', null),true) == $Pile[$SP]['id_depot'])) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'selected="selected"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
'</option>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_depots @ ../plugins-dist/svp/formulaires/inc-select_depot.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/svp/formulaires/inc-select_depot.html
// Temps de compilation total: 5.000 ms
//

function html_8d5feb137cb2c849a71db06f7cb3680b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<select name="depot" id="depot">
	<option value="tout_depot"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'depot', null),true) == 'tout_depot')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'selected="selected"') :
		'') .
'>' .
_T('svp:option_depot_tout') .
'</option>
' .
BOUCLE_depotshtml_8d5feb137cb2c849a71db06f7cb3680b($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</select>
');

	return analyse_resultat_skel('html_8d5feb137cb2c849a71db06f7cb3680b', $Cache, $page, '../plugins-dist/svp/formulaires/inc-select_depot.html');
}
?>