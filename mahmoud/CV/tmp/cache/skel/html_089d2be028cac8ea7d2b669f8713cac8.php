<?php

/*
 * Squelette : ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html
 * Date :      Wed, 21 Feb 2018 10:24:27 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:04 GMT
 * Boucles :   _comptem, _medias, _compte, _types
 */ 

function BOUCLE_comptemhtml_089d2be028cac8ea7d2b669f8713cac8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = ((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique']))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = ((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article']))))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = ((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve']))))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = ((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document']))))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "documents", "?","",array (
  'lien' => true,
  'criteres' => 
  array (
    'id_document' => true,
  ),
),"id_document");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_comptem';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_documents_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','id_document'), 'resultats' => array('documents','id','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("documents.id_document",
		"$rech_select");
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])))?count((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique']))):strlen((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])))) ? '' : ((is_array((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])))) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])), '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])))?count((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique']))):strlen((isset($Pile[$SP]['id_rubrique'])?$Pile[$SP]['id_rubrique']:(@$Pile[0]['id_rubrique'])))) ? '' : 
			array('=', 'L1.objet', sql_quote('rubrique'))), (!(is_array((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])))?count((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article']))):strlen((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])))) ? '' : ((is_array((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])))) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])), '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])))?count((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article']))):strlen((isset($Pile[$SP]['id_article'])?$Pile[$SP]['id_article']:(@$Pile[0]['id_article'])))) ? '' : 
			array('=', 'L2.objet', sql_quote('article'))), (!(is_array((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])))?count((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve']))):strlen((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])))) ? '' : ((is_array((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])))) ? sql_in('L3.id_objet',sql_quote($in2)) : 
			array('=', 'L3.id_objet', sql_quote((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])), '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])))?count((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve']))):strlen((isset($Pile[$SP]['id_breve'])?$Pile[$SP]['id_breve']:(@$Pile[0]['id_breve'])))) ? '' : 
			array('=', 'L3.objet', sql_quote('breve'))), (!(is_array((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document'])))?count((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document']))):strlen((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document'])))) ? '' : ((is_array((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document'])))) ? sql_in('documents.id_document',sql_quote($in3)) : 
			array('=', 'documents.id_document', sql_quote((isset($Pile[$SP]['id_document'])?$Pile[$SP]['id_document']:(@$Pile[0]['id_document'])), '','bigint(21) NOT NULL AUTO_INCREMENT')))), $rech_where?$rech_where:'', 
			array('REGEXP', 'documents.statut', "'.*'"), 
			array('=', 'documents.media', sql_quote(interdire_scripts(safehtml($Pile[$SP]['valeur'])), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','_comptem',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_comptem']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_comptem @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_mediashtml_089d2be028cac8ea7d2b669f8713cac8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['liste'] = array();
	$command['liste'][] = 'image';
	$command['liste'][] = 'audio';
	$command['liste'][] = 'video';
	$command['liste'][] = 'file';

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_medias';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"id_rubrique",
		"id_article",
		"id_breve",
		"id_document");
		$command['orderby'] = array();
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
		"DATA",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','_medias',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_comptemhtml_089d2be028cac8ea7d2b669f8713cac8($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
	' .
	(($t2 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'media',interdire_scripts(safehtml($Pile[$SP]['valeur']))),concat(_T(concat('medias:media_',interdire_scripts(safehtml($Pile[$SP]['valeur'])))),' (',$Numrows['_comptem']['total'],')'),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'media', null),true) == interdire_scripts(safehtml($Pile[$SP]['valeur'])))),'ajax')))!=='' ?
			((	'<li class=\'' .
		interdire_scripts(safehtml($Pile[$SP]['valeur'])) .
		'\'>') . $t2 . '</li>') :
			'') .
	'
	') .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_medias @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_comptehtml_089d2be028cac8ea7d2b669f8713cac8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['id_rubrique']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_article']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	if (!(is_array($a = (@$Pile[0]['id_breve']))))
		$in2[]= $a;
	else $in2 = array_merge($in2, $a);
	$in3 = array();
	if (!(is_array($a = (@$Pile[0]['id_document']))))
		$in3[]= $a;
	else $in3 = array_merge($in3, $a);
	// RECHERCHE
	if (!strlen((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")))){
		list($rech_select, $rech_where) = array("0 as points","");
	} else
	{
		$prepare_recherche = charger_fonction('prepare_recherche', 'inc');
		list($rech_select, $rech_where) = $prepare_recherche((isset($Pile[0]["recherche"])?$Pile[0]["recherche"]:(isset($GLOBALS["recherche"])?$GLOBALS["recherche"]:"")), "documents", "?","",array (
  'lien' => true,
  'criteres' => 
  array (
    'id_document' => true,
  ),
),"id_document");
	}
	
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_compte';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_documents_liens','L3' => 'spip_documents_liens','resultats' => 'spip_resultats');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_document'), 'L3' => array('documents','id_document'), 'resultats' => array('documents','id','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['select'] = array("documents.id_document",
		"$rech_select");
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : ((is_array(@$Pile[0]['id_rubrique'])) ? sql_in('L1.id_objet',sql_quote($in)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_rubrique'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_rubrique'])?count(@$Pile[0]['id_rubrique']):strlen(@$Pile[0]['id_rubrique'])) ? '' : 
			array('=', 'L1.objet', sql_quote('rubrique'))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : ((is_array(@$Pile[0]['id_article'])) ? sql_in('L2.id_objet',sql_quote($in1)) : 
			array('=', 'L2.id_objet', sql_quote(@$Pile[0]['id_article'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_article'])?count(@$Pile[0]['id_article']):strlen(@$Pile[0]['id_article'])) ? '' : 
			array('=', 'L2.objet', sql_quote('article'))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : ((is_array(@$Pile[0]['id_breve'])) ? sql_in('L3.id_objet',sql_quote($in2)) : 
			array('=', 'L3.id_objet', sql_quote(@$Pile[0]['id_breve'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), (!(is_array(@$Pile[0]['id_breve'])?count(@$Pile[0]['id_breve']):strlen(@$Pile[0]['id_breve'])) ? '' : 
			array('=', 'L3.objet', sql_quote('breve'))), (!(is_array(@$Pile[0]['id_document'])?count(@$Pile[0]['id_document']):strlen(@$Pile[0]['id_document'])) ? '' : ((is_array(@$Pile[0]['id_document'])) ? sql_in('documents.id_document',sql_quote($in3)) : 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')))), $rech_where?$rech_where:'', 
			array('REGEXP', 'documents.statut', "'.*'"), 
			array('=', 'documents.extension', sql_quote($Pile[$SP]['extension'], '','varchar(10) NOT NULL DEFAULT \'\'')), 
			array('=', 'documents.media', sql_quote(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'media', null),true)), '', 'char')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','_compte',50,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_compte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_compte @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_typeshtml_089d2be028cac8ea7d2b669f8713cac8(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (interdire_scripts(liste_extensions_utilisees(entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), ''),true)))))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'types_documents';
		$command['id'] = '_types';
		$command['from'] = array('types_documents' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("types_documents.extension",
		"types_documents.titre");
		$command['orderby'] = array('types_documents.titre');
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(sql_in('types_documents.extension',sql_quote($in)));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','_types',47,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
	' .
BOUCLE_comptehtml_089d2be028cac8ea7d2b669f8713cac8($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
	' .
	(($Numrows['_compte']['total'])  ?
			(' ' . (($t3 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'extension',interdire_scripts($Pile[$SP]['extension'])),interdire_scripts(concat(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]),' (',$Numrows['_compte']['total'],')')),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'extension', null),true) == interdire_scripts($Pile[$SP]['extension']))),'ajax')))!=='' ?
				('<li>' . $t3 . '<span> | </span></li>') :
				'')) :
			'') .
	'
	') .
'
	');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_types @ ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html
// Temps de compilation total: 98.005 ms
//

function html_089d2be028cac8ea7d2b669f8713cac8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(self(),'debut_galerie','')) .
vide($Pile['vars'][$_zzz=(string)'self'] = parametre_url(table_valeur($Pile["vars"], (string)'self', null),'extension','')) .
vide($Pile['vars'][$_zzz=(string)'editable'] = interdire_scripts((((entites_html(sinon(table_valeur(@$Pile[0], (string)'editable', null), 'oui'),true) == 'non')) ?'' :' '))) .
'<div class=\'onglets_simple\'>
<ul class=\'medias\'>
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'media',''),_T('medias:tous_les_medias'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'media', null), ''),true) == '')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
' .
BOUCLE_mediashtml_089d2be028cac8ea7d2b669f8713cac8($Cache, $Pile, $doublons, $Numrows, $SP) .
'
</ul>
<div class="nettoyeur"></div>
</div>

' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_document', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
<a class=\'annule_filtre\' href=\'' .
	parametre_url(table_valeur($Pile["vars"], (string)'self', null),'id_document','') .
	'\' title="' .
	attribut_html(_T('medias:tout_voir')) .
	'">' .
	interdire_scripts(inserer_attribut(filtre_balise_img_dist(chemin_image('fermer-16.png')),'alt',_T('medias:tout_voir'))) .
	'</a>
')) :
		'') .
'

<div class=\'onglets_simple second clearfix\'>
<ul class=\'statut\'>
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'statut',''),_T('medias:documents_tous'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'statut', null), '.*'),true) == '.*')),'ajax')))!=='' ?
		('<li class=\'first\'>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'statut','publie'),_T('medias:documents_publies'),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'statut', null),true) == 'publie')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'statut','prop|prepa|poubelle'),_T('medias:documents_non_publies'),interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'statut', null),true) == 'prop|prepa|poubelle')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
</ul>

<ul class=\'distant\'>
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'distant',''),_T('medias:documents_tous'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'distant', null), ''),true) == '')),'ajax')))!=='' ?
		('<li class=\'first\'>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'distant','oui'),_T('medias:documents_distants'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'distant', null), ''),true) == 'oui')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'distant','non'),_T('medias:documents_locaux'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'distant', null), ''),true) == 'non')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
</ul>

<ul class=\'brises\'>
' .
(($t1 = strval(lien_ou_expose(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'brise|orphelins',''),_T('medias:documents_tous'),interdire_scripts((((((entites_html(sinon(table_valeur(@$Pile[0], (string)'brise', null), '0'),true)) ?'' :' ')) AND (interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'orphelins', null), '0'),true)) ?'' :' ')))) ?' ' :'')),'ajax')))!=='' ?
		('<li class=\'first\'>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'brise',''),'orphelins','1'),_T('medias:documents_orphelins'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'orphelins', null), '0'),true) == '1')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'brise','1'),'orphelins',''),_T('medias:documents_brises'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'brise', null), '0'),true) == '1')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
</ul>

<ul class=\'sanstitre\'>
' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'sanstitre',''),'sansvignette',''),_T('medias:documents_tous'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'sanstitre', null), interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'sansvignette', null),true))),true) == '')),'ajax')))!=='' ?
		('<li class=\'first\'>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'sanstitre','1'),'sansvignette',''),_T('public|spip|ecrire:info_sans_titre'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'sanstitre', null), ''),true) == '1')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
' .
(($t1 = strval(lien_ou_expose(parametre_url(parametre_url(table_valeur($Pile["vars"], (string)'self', null),'sansvignette','1'),'sanstitre',''),_T('medias:info_sans_vignette'),interdire_scripts((entites_html(sinon(table_valeur(@$Pile[0], (string)'sansvignette', null), ''),true) == '1')),'ajax')))!=='' ?
		('<li>' . $t1 . '</li>') :
		'') .
'
</ul>
</div>

' .
(($t1 = BOUCLE_typeshtml_089d2be028cac8ea7d2b669f8713cac8($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		('
<ul class=\'choix-type\'>
	' . $t1 . '
</ul>
') :
		'') .
'

<div class=\'nettoyeur\'></div>
' .
executer_balise_dynamique('FORMULAIRE_RECHERCHE_ECRIRE',
	array(table_valeur($Pile["vars"], (string)'self', null),'ajax'),
	array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','',58,$GLOBALS['spip_lang'])) .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'galerie', null), 'prive/squelettes/inclure/mediatheque-galerie'),true))) . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html\',\'html_089d2be028cac8ea7d2b669f8713cac8\',\'\',60,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('documents') . '))?$v:true), _request("connect"));
?'.'>' .
'

<div class=\'nettoyeur\'></div>
' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'editable', null)))!=='' ?
		($t1 . (	'
<div class=\'actions\'>
' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'brise', null), '0'),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		invalideur_session($Cache, lien_ou_expose(generer_action_auteur('verifier_documents_brises','1',invalideur_session($Cache, table_valeur($Pile["vars"], (string)'self', null))),_T('medias:verifier_documents_brises'),'0','ajax')) .
		'
')) :
			'') .
	'
' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'orphelins', null), '0'),true)) ?' ' :''))))!=='' ?
			($t2 . (	'
	' .
		invalideur_session($Cache, lien_ou_expose(generer_action_auteur('verifier_documents_liens','*',invalideur_session($Cache, table_valeur($Pile["vars"], (string)'self', null))),_T('medias:verifier_documents_inutilises'),'0','ajax')) .
		'
')) :
			'') .
	'
' .
	(($t2 = strval(recuperer_fond( 'prive/squelettes/inclure/ajouter-documents' , array_merge($Pile[0],array()), array('ajax' => ($v=( @$Pile[0]['ajax'] ))?$v:true,'compil'=>array('../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html','html_089d2be028cac8ea7d2b669f8713cac8','',57,$GLOBALS['spip_lang'])), _request('connect'))))!=='' ?
			('
' . $t2 . '
') :
			'') .
	'
</div>')) :
		''));

	return analyse_resultat_skel('html_089d2be028cac8ea7d2b669f8713cac8', $Cache, $page, '../plugins-dist/medias/prive/squelettes/inclure/mediatheque-navigation.html');
}
?>