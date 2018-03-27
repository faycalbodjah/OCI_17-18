<?php

/*
 * Squelette : squelettes-dist/inclure/documents.html
 * Date :      Wed, 21 Feb 2018 10:25:11 GMT
 * Compile :   Wed, 21 Feb 2018 12:13:16 GMT
 * Boucles :   _documents_portfolio, _afficher_document, _documents_joints, _documents_decompte
 */ 

function BOUCLE_documents_portfoliohtml_ec8f89e79d12293c7a104ae7428e27e3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$doublons_index = array();
	$in = array();
	if (!(is_array($a = (@$Pile[0]['objet']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_objet']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'png';
	$in2[]= 'jpg';
	$in2[]= 'gif';

	// Initialise le(s) critère(s) doublons
	if (!isset($doublons[$d = 'documents'])) { $doublons[$d] = ''; }

	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_portfolio';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("L1.rang_lien",
		"0+documents.titre AS num1",
		"documents.date",
		"documents.id_document",
		"L2.mime_type",
		"L1.id_objet AS id_article",
		"documents.titre",
		"documents.fichier");
		$command['orderby'] = array('L1.rang_lien', 'num1', 'documents.date');
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['objet'])?count(@$Pile[0]['objet']):strlen(@$Pile[0]['objet'])) ? '' : ((is_array(@$Pile[0]['objet'])) ? sql_in('L1.objet',sql_quote($in)) : 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['id_objet'])?count(@$Pile[0]['id_objet']):strlen(@$Pile[0]['id_objet'])) ? '' : ((is_array(@$Pile[0]['id_objet'])) ? sql_in('L1.id_objet',sql_quote($in1)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in2)), 
			array('=', 'L1.vu', "'non'"), 
			array(sql_in('documents.id_document', $doublons[$doublons_index[]= ('documents')], 'NOT')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_documents_portfolio',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

			foreach($doublons_index as $k) $doublons[$k] .= "," . $Pile[$SP]['id_document']; // doublons

		$t0 .= (($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		('
			<li><a href="' . $t1 . (	'" type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'" onclick="location.href=\'' .
	ancre_url(parametre_url(url_absolue(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_article'], 'article', '', '', true)))),'id_document',$Pile[$SP]['id_document']),'documents_portfolio') .
	'\';return false;"' .
	(($t2 = strval(interdire_scripts(@$Pile[0]['exposer'])))!=='' ?
			(' class="' . $t2 . '"') :
			'') .
	(($t2 = strval(interdire_scripts(couper(attribut_html(traiter_doublons_documents($doublons, supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80'))))!=='' ?
			(' title="' . $t2 . '"') :
			'') .
	'>' .
	interdire_scripts(inserer_attribut(inserer_attribut(filtrer('image_graver', filtrer('image_recadre',filtrer('image_passe_partout',get_spip_doc($Pile[$SP]['fichier']),'90','90'),'90','90')),'class','spip_logo'),'alt',interdire_scripts(couper(attribut_html(traiter_doublons_documents($doublons, supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))),'80')))) .
	'</a></li>
			')) :
		'');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_documents_portfolio @ squelettes-dist/inclure/documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_afficher_documenthtml_ec8f89e79d12293c7a104ae7428e27e3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['objet']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_objet']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'png';
	$in2[]= 'jpg';
	$in2[]= 'gif';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_afficher_document';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("documents.id_document");
		$command['join'] = array('L1' => array('documents','id_document'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['orderby'] = array(((!sql_quote($in2) OR sql_quote($in2)==="''") ? 0 : ('FIELD(documents.extension,' . sql_quote($in2) . ')')));
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')), (!(is_array(@$Pile[0]['objet'])?count(@$Pile[0]['objet']):strlen(@$Pile[0]['objet'])) ? '' : ((is_array(@$Pile[0]['objet'])) ? sql_in('L1.objet',sql_quote($in)) : 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['id_objet'])?count(@$Pile[0]['id_objet']):strlen(@$Pile[0]['id_objet'])) ? '' : ((is_array(@$Pile[0]['id_objet'])) ? sql_in('L1.id_objet',sql_quote($in1)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array('=', 'documents.mode', "'document'"), sql_in('documents.extension',sql_quote($in2)));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_afficher_document',28,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
filtrer('image_graver',filtrer('image_reduire',
	((($recurs=(isset($Pile[0]['recurs'])?$Pile[0]['recurs']:0))>=5)? '' :
	recuperer_fond('modeles/emb', array('lien' => vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))) ,
	'lang' => $GLOBALS["spip_lang"] ,
	'id_document'=>$Pile[$SP]['id_document'],
	'id'=>$Pile[$SP]['id_document'],
	'recurs'=>(++$recurs)), array('compil'=>array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_afficher_document',29,$GLOBALS['spip_lang']), 'trim'=>true), ''))
,'672','*')) .
'
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_afficher_document @ squelettes-dist/inclure/documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_documents_jointshtml_ec8f89e79d12293c7a104ae7428e27e3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['objet']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_objet']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'gif';
	$in2[]= 'jpg';
	$in2[]= 'png';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_joints';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("L1.rang_lien",
		"0+documents.titre AS num1",
		"documents.date",
		"documents.id_document",
		"L2.mime_type",
		"documents.extension",
		"documents.titre",
		"documents.fichier",
		"L2.titre AS type_document",
		"documents.taille",
		"documents.descriptif",
		"documents.credits");
		$command['orderby'] = array('L1.rang_lien', 'num1', 'documents.date');
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['objet'])?count(@$Pile[0]['objet']):strlen(@$Pile[0]['objet'])) ? '' : ((is_array(@$Pile[0]['objet'])) ? sql_in('L1.objet',sql_quote($in)) : 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['id_objet'])?count(@$Pile[0]['id_objet']):strlen(@$Pile[0]['id_objet'])) ? '' : ((is_array(@$Pile[0]['id_objet'])) ? sql_in('L1.id_objet',sql_quote($in1)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), sql_in('documents.extension',sql_quote($in2),'NOT'), 
			array('=', 'L1.vu', "'non'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_documents_joints',46,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:info_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
(($t1 = strval(vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true)))))!=='' ?
		('
			<li>
				<a href="' . $t1 . (	'" type="' .
	interdire_scripts($Pile[$SP]['mime_type']) .
	'" class="spip_doc' .
	(($t2 = strval(interdire_scripts(attribut_html($Pile[$SP]['extension']))))!=='' ?
			(' ' . $t2) :
			'') .
	'"><strong class="titre">' .
	interdire_scripts(((($a = traiter_doublons_documents($doublons, supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) OR (is_string($a) AND strlen($a))) ? $a : interdire_scripts(couper(basename(get_spip_doc($Pile[$SP]['fichier'])),'80')))) .
	'</strong>
					<small class="info_document">(' .
	(($t2 = strval(interdire_scripts(strtoupper($Pile[$SP]['extension']))))!=='' ?
			((	'<abbr title="' .
		$l1 .
		' ' .
		interdire_scripts($Pile[$SP]['type_document']) .
		'" class="ext">') . $t2 . '</abbr> - ') :
			'') .
	(($t2 = strval(interdire_scripts(taille_en_octets($Pile[$SP]['taille']))))!=='' ?
			('<span>' . $t2 . '</span>') :
			'') .
	')</small></a>
				' .
	(($t2 = strval(interdire_scripts(traiter_doublons_documents($doublons, propre($Pile[$SP]['descriptif'], $connect, $Pile[0])))))!=='' ?
			((	'<div class="descriptif">') . $t2 . '</div>') :
			'') .
	'
				' .
	(($t2 = strval(interdire_scripts($Pile[$SP]['credits'])))!=='' ?
			((	'<div class="credits">') . $t2 . '</div>') :
			'') .
	'
				')) :
		'') .
'</li>
			');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_documents_joints @ squelettes-dist/inclure/documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_documents_decomptehtml_ec8f89e79d12293c7a104ae7428e27e3(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['objet']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$in1 = array();
	if (!(is_array($a = (@$Pile[0]['id_objet']))))
		$in1[]= $a;
	else $in1 = array_merge($in1, $a);
	$in2 = array();
	$in2[]= 'gif';
	$in2[]= 'jpg';
	$in2[]= 'png';
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_documents_decompte';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_forum');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("documents.id_document");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','id_objet','id_document','L2.objet='.sql_quote('document')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
quete_condition_statut('documents.statut','publie,prop,prepa','publie',''), 
quete_condition_postdates('documents.date_publication',''), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), (!(is_array(@$Pile[0]['objet'])?count(@$Pile[0]['objet']):strlen(@$Pile[0]['objet'])) ? '' : ((is_array(@$Pile[0]['objet'])) ? sql_in('L1.objet',sql_quote($in)) : 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')))), (!(is_array(@$Pile[0]['id_objet'])?count(@$Pile[0]['id_objet']):strlen(@$Pile[0]['id_objet'])) ? '' : ((is_array(@$Pile[0]['id_objet'])) ? sql_in('L1.id_objet',sql_quote($in1)) : 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')))), 
			array('=', 'documents.mode', "'document'"), 
			array('=', 'L2.texte', "''"), sql_in('documents.extension',sql_quote($in2),'NOT'), 
			array('=', 'L1.vu', "'non'"));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_documents_decompte',37,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_documents_decompte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
' .
(($Numrows['_documents_decompte']['total'] == '1') ? trim(recuperer_fond( 'modeles/emb' , array('id_document' => $Pile[$SP]['id_document'] ), array('compil'=>array('squelettes-dist/inclure/documents.html','html_ec8f89e79d12293c7a104ae7428e27e3','_documents_decompte',39,$GLOBALS['spip_lang'])), _request('connect'))):''));
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_documents_decompte @ squelettes-dist/inclure/documents.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes-dist/inclure/documents.html
// Temps de compilation total: 67.004 ms
//

function html_ec8f89e79d12293c7a104ae7428e27e3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	filtre_setenv($Pile,'article','objet') .
	interdire_scripts(filtre_setenv($Pile,entites_html(table_valeur(@$Pile[0], (string)'id_article', null),true),'id_objet')))) :
		'') .
'
' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true)) ?' ' :''))))!=='' ?
		($t1 . (	filtre_setenv($Pile,'rubrique','objet') .
	interdire_scripts(filtre_setenv($Pile,entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true),'id_objet')))) :
		'') .
'


' .
(($t1 = BOUCLE_documents_portfoliohtml_ec8f89e79d12293c7a104ae7428e27e3($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
	<div class="bloc clearfix documents_portfolio" id="documents_portfolio">
		<h2>' .
		_T('medias:info_portfolio') .
		'</h2>
		<ul>
			') . $t1 . '
		</ul>
	</div><!--#documents_portfolio-->
') :
		'') .
'


' .
BOUCLE_afficher_documenthtml_ec8f89e79d12293c7a104ae7428e27e3($Cache, $Pile, $doublons, $Numrows, $SP) .
'



' .
(($t1 = BOUCLE_documents_decomptehtml_ec8f89e79d12293c7a104ae7428e27e3($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		$t1 :
		((	'



' .
	(($t2 = BOUCLE_documents_jointshtml_ec8f89e79d12293c7a104ae7428e27e3($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
			((	'
	<div class="menu documents_joints" id="documents_joints">
		<h2>' .
			_T('medias:titre_documents_joints') .
			'</h2>
		<ul class="spip">
			') . $t2 . '
		</ul>
	</div><!--#documents_joints-->
') :
			'') .
	'

'))) .
'
');

	return analyse_resultat_skel('html_ec8f89e79d12293c7a104ae7428e27e3', $Cache, $page, 'squelettes-dist/inclure/documents.html');
}
?>