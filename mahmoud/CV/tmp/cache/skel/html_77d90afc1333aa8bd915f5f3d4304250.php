<?php

/*
 * Squelette : plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html
 * Date :      Wed, 21 Feb 2018 10:24:22 GMT
 * Compile :   Wed, 21 Feb 2018 12:13:16 GMT
 * Boucles :   _G
 */ 

function BOUCLE_Ghtml_77d90afc1333aa8bd915f5f3d4304250(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'groupes_mots';
		$command['id'] = '_G';
		$command['from'] = array('groupes_mots' => 'spip_groupes_mots');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("groupes_mots.id_groupe",
		"groupes_mots.titre",
		"groupes_mots.unseul");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('REGEXP', 'groupes_mots.tables_liees', sql_quote(table_valeur($Pile["vars"], (string)'table', null), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html','html_77d90afc1333aa8bd915f5f3d4304250','_G',2,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($t1 = strval(in_any($Pile[$SP]['id_groupe'],table_valeur(@$Pile[0], (string)'ajouter_groupe', null),' ')))!=='' ?
		($t1 . (	'
	<fieldset>
	<legend>' .
	_T('public|spip|ecrire:mots_clefs') .
	' : ' .
	interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) .
	'</legend>
		' .
	
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('formulaires/inc-choix_mots') . ', array(\'id_groupe\' => ' . argumenter_squelette($Pile[$SP]['id_groupe']) . ',
	\'ajouter_mot\' => ' . argumenter_squelette(@$Pile[0]['ajouter_mot']) . ',
	\'unseul\' => ' . argumenter_squelette($Pile[$SP]['unseul']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html\',\'html_77d90afc1333aa8bd915f5f3d4304250\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
	</fieldset>
')) :
		''));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_G @ plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html
// Temps de compilation total: 7.000 ms
//

function html_77d90afc1333aa8bd915f5f3d4304250($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'table'] = concat(concat('(^|,)(',interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'table', null), 'rienderien'),true))),interdire_scripts(choixsiegal((include_spip('inc/config')?lire_config('mots_cles_forums',null,false):''),'oui','|forum','')),')(,|$)')) .
BOUCLE_Ghtml_77d90afc1333aa8bd915f5f3d4304250($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_77d90afc1333aa8bd915f5f3d4304250', $Cache, $page, 'plugins-dist/forum/formulaires/inc-forum_bloc_choix_mots.html');
}
?>