<?php

/*
 * Squelette : ../prive/objets/infos/auteur.html
 * Date :      Wed, 21 Feb 2018 10:24:02 GMT
 * Compile :   Wed, 07 Mar 2018 09:21:18 GMT
 * Boucles :   _arts, _publie, _auteur
 */ 

function BOUCLE_artshtml_78a3d392412a8cf4011690a1f68df411(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = '_arts';
		$command['from'] = array('articles' => 'spip_articles','L1' => 'spip_auteurs_liens');
		$command['type'] = array();
		$command['groupby'] = array("articles.id_article");
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('articles','id_objet','id_article','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'L1.id_auteur', sql_quote($Pile[$SP]['id_auteur'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('NOT', 
			array('=', 'articles.statut', "'poubelle'")));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_78a3d392412a8cf4011690a1f68df411','_arts',22,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_arts']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat(' ', $Numrows['_arts']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_arts @ ../prive/objets/infos/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_publiehtml_78a3d392412a8cf4011690a1f68df411(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_publie';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.id_auteur");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('auteurs','id_auteur'), 'L2' => array('L1','id_article','id_objet','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('L2.statut','!','publie',''), 
quete_condition_postdates('L2.date',''), 
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''), 
			array('=', 'auteurs.id_auteur', sql_quote($Pile[$SP]['id_auteur'], '','bigint(21) NOT NULL AUTO_INCREMENT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_78a3d392412a8cf4011690a1f68df411','_publie',38,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:icone_voir_en_ligne');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
((objet_info('auteur','page'))  ?
		(' ' . (	'
	' .
	filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=auteur&id=' .
		$Pile[$SP]['id_auteur'])),'var_mode','calcul'),$l1,'racine'))) :
		'') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_publie @ ../prive/objets/infos/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_auteurhtml_78a3d392412a8cf4011690a1f68df411(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_auteur';
		$command['from'] = array('auteurs' => 'spip_auteurs');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("auteurs.id_auteur",
		"auteurs.statut",
		"auteurs.bio");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'auteurs.id_auteur', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id', null),true)), '', 'char')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('auteurs.statut',sql_quote($in)) : 
			array('=', 'auteurs.statut', sql_quote(@$Pile[0]['statut'], '','varchar(255) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../prive/objets/infos/auteur.html','html_78a3d392412a8cf4011690a1f68df411','_auteur',1,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class=\'infos\'>
<div class=\'numero\'>' .
_T('public|spip|ecrire:titre_cadre_numero_auteur') .
'<p>' .
$Pile[$SP]['id_auteur'] .
'</p></div>

<div class="statut">
' .
(($t1 = strval(interdire_scripts(traduire_statut_auteur($Pile[$SP]['statut'],interdire_scripts($Pile[$SP]['bio'])))))!=='' ?
		((	'<p>' .
	(($Pile[$SP]['id_auteur'] == interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) ? _T('public|spip|ecrire:info_statut_auteur_2'):_T('public|spip|ecrire:info_statut_auteur')) .
	' <strong>') . $t1 . '</strong></p>') :
		'') .
'

' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre', '', '0', invalideur_session($Cache, $Pile[$SP]['id_auteur']))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
	' .
	(($t2 = strval(interdire_scripts(invalideur_session($Cache, ((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null) == invalideur_session($Cache, $Pile[$SP]['id_auteur'])) ? _T('public|spip|ecrire:info_admin_je_suis_webmestre'):_T('public|spip|ecrire:info_admin_webmestre'))))))!=='' ?
			('<p>' . $t2 . '</p>') :
			'') .
	'
')) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(invalideur_session($Cache, (((((((table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null) == invalideur_session($Cache, $Pile[$SP]['id_auteur']))) AND (invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) ?'' :' ')))) ?' ' :'')) AND (invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('etrewebmestre')?" ":"")) ?' ' :'')))) ?' ' :'')))))!=='' ?
		($t1 . (	'
	' .
	((defined('_ID_WEBMESTRES'))  ?
			(' ' . (	'
		' .
		vide($Pile['vars'][$_zzz=(string)'options'] = basename((defined('_FILE_OPTIONS')?constant('_FILE_OPTIONS'):''))) .
		_T('public|spip|ecrire:info_webmestre_forces', array('file_options' => table_valeur($Pile["vars"], (string)'options', null))) .
		'
	')) :
			'') .
	'
	' .
	(!(defined('_ID_WEBMESTRES'))  ?
			(' ' . (	'
		' .
		bouton_action(_T('public|spip|ecrire:info_admin_etre_webmestre'),invalideur_session($Cache, generer_action_auteur('etre_webmestre',invalideur_session($Cache, time('')),invalideur_session($Cache, self())))) .
		'
	')) :
			'') .
	'
')) :
		'') .
'
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/infos/inc-auteur-rubriques') . ', array(\'id_auteur\' => ' . argumenter_squelette($Pile[$SP]['id_auteur']) . ',
	\'statut\' => ' . argumenter_squelette($Pile[$SP]['statut']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../prive/objets/infos/auteur.html\',\'html_78a3d392412a8cf4011690a1f68df411\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>' .
'
<div class=\'nb_elements\'>
' .
(($t1 = BOUCLE_artshtml_78a3d392412a8cf4011690a1f68df411($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		($t1 . (	'
' .
		(($t3 = strval(interdire_scripts((($Pile[$SP]['statut'] <> '6forum') ? ' ':''))))!=='' ?
				($t3 . (($t4 = strval(singulier_ou_pluriel($Numrows['_arts']['total'],'info_articles_un','info_articles_nb')))!=='' ?
					('<div>' . $t4 . '</div>') :
					'')) :
				'') .
		'
')) :
		((	'
' .
	(($t2 = strval(interdire_scripts((($Pile[$SP]['statut'] <> '6forum') ? ' ':''))))!=='' ?
			($t2 . (	'<div class="noinfo">' .
		$Numrows['_arts']['total'] .
		' ' .
		_T('public|spip|ecrire:info_article') .
		'</div>')) :
			'') .
	'
'))) .
'
<!--nb_elements-->
</div>
</div>

' .
(($t1 = BOUCLE_publiehtml_78a3d392412a8cf4011690a1f68df411($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'
	' .
	((objet_info('auteur','page'))  ?
			(' ' . (	'
	' .
		(($t3 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('previsualiser', 'auteur', invalideur_session($Cache, $Pile[$SP]['id_auteur']), '', invalideur_session($Cache, array('statut' => '')))?" ":""))))!=='' ?
				($t3 . (	'
		' .
			filtre_icone_horizontale_dist(parametre_url(generer_url_action('redirect',(	'type=auteur&id=' .
				$Pile[$SP]['id_auteur'])),'var_mode','preview'),_T('public|spip|ecrire:previsualiser'),'preview') .
			'
	')) :
				''))) :
			'') .
	'
'))) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_auteur @ ../prive/objets/infos/auteur.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/objets/infos/auteur.html
// Temps de compilation total: 32.002 ms
//

function html_78a3d392412a8cf4011690a1f68df411($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
BOUCLE_auteurhtml_78a3d392412a8cf4011690a1f68df411($Cache, $Pile, $doublons, $Numrows, $SP) .
'
');

	return analyse_resultat_skel('html_78a3d392412a8cf4011690a1f68df411', $Cache, $page, '../prive/objets/infos/auteur.html');
}
?>