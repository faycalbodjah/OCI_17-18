<?php

/*
 * Squelette : ../plugins-dist/medias/modeles/document_desc.html
 * Date :      Wed, 21 Feb 2018 10:24:30 GMT
 * Compile :   Wed, 07 Mar 2018 11:49:31 GMT
 * Boucles :   _compte, _docslies
 */ 

function BOUCLE_comptehtml_06dee466bdbba5039ec1da42f908febc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'documents_liens';
		$command['id'] = '_compte';
		$command['from'] = array('documents_liens' => 'spip_documents_liens');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '0,2';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('=', 'documents_liens.id_document', sql_quote($Pile[$SP]['id_document'], '','bigint(21) NOT NULL DEFAULT \'0\'')));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/modeles/document_desc.html','html_06dee466bdbba5039ec1da42f908febc','_compte',88,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_compte']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_compte @ ../plugins-dist/medias/modeles/document_desc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_docslieshtml_06dee466bdbba5039ec1da42f908febc(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (@$Pile[0]['statut']))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	if (!isset($command['table'])) {
		$command['table'] = 'documents';
		$command['id'] = '_docslies';
		$command['from'] = array('documents' => 'spip_documents','L1' => 'spip_documents_liens','L2' => 'spip_types_documents');
		$command['type'] = array();
		$command['groupby'] = array("documents.id_document");
		$command['select'] = array("documents.id_document",
		"documents.mode",
		"L1.vu",
		"documents.statut",
		"documents.distant",
		"documents.fichier",
		"documents.titre",
		"documents.descriptif",
		"documents.extension",
		"documents.largeur",
		"documents.hauteur",
		"documents.media",
		"documents.duree",
		"documents.credits",
		"documents.taille",
		"documents.date",
		"L2.inclus",
		"L1.objet",
		"L1.id_objet",
		"L1.rang_lien");
		$command['orderby'] = array();
		$command['join'] = array('L1' => array('documents','id_document'), 'L2' => array('documents','extension'));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('IN', 'documents.mode', '(\'image\',\'document\')'), 
			array('(documents.taille > 0 OR documents.distant=\'oui\')'), 
			array('=', 'documents.id_document', sql_quote(@$Pile[0]['id_document'], '','bigint(21) NOT NULL AUTO_INCREMENT')), 
			array('=', 'L1.id_objet', sql_quote(@$Pile[0]['id_objet'], '','bigint(21) NOT NULL DEFAULT \'0\'')), 
			array('=', 'L1.objet', sql_quote(@$Pile[0]['objet'], '','varchar(25) NOT NULL DEFAULT \'\'')), (!(is_array(@$Pile[0]['statut'])?count(@$Pile[0]['statut']):strlen(@$Pile[0]['statut'])) ? '' : ((is_array(@$Pile[0]['statut'])) ? sql_in('documents.statut',sql_quote($in)) : 
			array('=', 'documents.statut', sql_quote(@$Pile[0]['statut'], '','varchar(10) NOT NULL DEFAULT \'0\'')))));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('../plugins-dist/medias/modeles/document_desc.html','html_06dee466bdbba5039ec1da42f908febc','_docslies',8,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('medias:document_vu');
	$l2 = _T('medias:document_vu');
	$l3 = _T('public|spip|ecrire:info_sans_titre');
	$l4 = _T('medias:fichier_distant');
	$l5 = _T('medias:fichier_distant');
	$l6 = _T('public|spip|ecrire:info_numero_abbreviation');
	$l7 = _T('medias:details_document_afficher_masquer');
	$l8 = _T('medias:details_document');
	$l9 = _T('medias:label_credits');
	$l10 = _T('medias:info_dimensions_image');
	$l11 = _T('medias:info_resolution_image');
	$l12 = _T('medias:info_duree');
	$l13 = _T('medias:info_taille');
	$l14 = _T('public|spip|ecrire:date');
	$l15 = _T('medias:label_fichier');
	$l16 = _T('medias:upload_info_mode_document');
	$l17 = _T('medias:upload_info_mode_image');
	$l18 = _T('medias:bouton_enlever_supprimer_document');
	$l19 = _T('medias:bouton_enlever_supprimer_document_confirmation');
	$l20 = _T('medias:bouton_enlever_document');
	$l21 = _T('medias:ordonner_ce_document');
	$l22 = _T('medias:ordonner_ce_document');
	$l23 = _T('medias:bouton_modifier_document');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
<div class="item ' .
interdire_scripts($Pile[$SP]['mode']) .
' vu_' .
interdire_scripts($Pile[$SP]['vu']) .
' statut_' .
interdire_scripts($Pile[$SP]['statut']) .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . 'distant') :
		'') .
'" id="doc' .
$Pile[$SP]['id_document'] .
'" onclick="jQuery(this).toggleClass(\'hover\');">
	<div class="presentation">
		' .
(($t1 = strval(filtrer('image_graver',filtrer('image_reduire',quete_logo_document(quete_document($Pile[$SP]['id_document'], ''), vider_url(urlencode_1738(generer_url_entite($Pile[$SP]['id_document'], 'document', '', '', true))), '', '', 150, 150, ''), '150', '150'))))!=='' ?
		('<div class=\'vignette\'>' . $t1 . '</div>') :
		'') .
'

		<div class="descriptions">
			<h4 class="titrem">
				' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['vu'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'<span class="vu"><img src=\'' .
	interdire_scripts(chemin_image('vu-16-10.png')) .
	'\' width=\'16\' height=\'10\' alt=\'' .
	attribut_html($l1) .
	'\' title=\'' .
	$l1 .
	'\'/></span> ')) :
		'') .
'
				<span class="titre" title="' .
interdire_scripts(attribut_html(basename($Pile[$SP]['fichier']))) .
'">
					' .
(($t1 = strval(interdire_scripts(((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) ?' ' :''))))!=='' ?
		($t1 . interdire_scripts(supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0]))) :
		'') .
'
					' .
(($t1 = strval(interdire_scripts(((supprimer_numero(typo($Pile[$SP]['titre']), "TYPO", $connect, $Pile[0])) ?'' :' '))))!=='' ?
		($t1 . (	'
						<i class="sanstitre">' .
	$l3 .
	'</i>
						<span class="fichier">' .
	interdire_scripts(basename($Pile[$SP]['fichier'])) .
	'</span>
					')) :
		'') .
'
					</span>
				<span class="image_loading"></span>
			</h4>

			<div class="descriptif ">' .
interdire_scripts(couper(propre($Pile[$SP]['descriptif'], $connect, $Pile[0]),'100')) .
'</div>

			<div class="infos">
				<div class="permanentes">
					' .
(($t1 = strval(interdire_scripts(((($Pile[$SP]['distant'] == 'oui')) ?' ' :''))))!=='' ?
		($t1 . (	'<img src=\'' .
	interdire_scripts(chemin_image('distant-16.png')) .
	'\' width=\'16\' height=\'16\' alt=\'' .
	attribut_html($l4) .
	'\' title=\'' .
	attribut_html($l4) .
	'\'/> ')) :
		'') .
$l6 .
$Pile[$SP]['id_document'] .
' - ' .
interdire_scripts($Pile[$SP]['extension']) .
'
					' .
(($t1 = strval(interdire_scripts((((((($Pile[$SP]['largeur']) OR (interdire_scripts($Pile[$SP]['hauteur']))) ?' ' :'')) AND (interdire_scripts(($Pile[$SP]['media'] == 'image')))) ?' ' :''))))!=='' ?
		($t1 . (	'
						' .
	(($t2 = strval(_T('info_largeur_vignette',array('largeur_vignette' => interdire_scripts($Pile[$SP]['largeur']), 'hauteur_vignette' => interdire_scripts($Pile[$SP]['hauteur'])))))!=='' ?
			('- ' . $t2) :
			'') .
	'
					')) :
		'') .
(($t1 = strval(interdire_scripts((((((in_array($Pile[$SP]['media'],array('audio', 'video'))) AND (interdire_scripts(intval($Pile[$SP]['duree'])))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
					 - ' .
	interdire_scripts(duree_en_secondes($Pile[$SP]['duree'])) .
	'
					')) :
		'') .
'
					<a class="lien_details"
						onClick="$(this).parent().next(\'.detaillees\').toggle(); return true;"
						title="' .
attribut_html($l7) .
'">' .
$l8 .
'</a>
				</div>
				<div class="detaillees">
					' .
vide($Pile['vars'][$_zzz=(string)'data'] = (	'<table class="compact">
						<tr class="credits">
							<th>' .
		$l9 .
		'</th>
							<td class="">' .
		interdire_scripts(((($a = $Pile[$SP]['credits']) OR (is_string($a) AND strlen($a))) ? $a : '<span class="vide">Crédits non renseignés</span>')) .
		'</td>
						</tr>
						' .
		(($t3 = strval(interdire_scripts(((((($Pile[$SP]['largeur']) OR (interdire_scripts($Pile[$SP]['hauteur']))) ?' ' :'')) ?' ' :''))))!=='' ?
				($t3 . (	'
						<tr>
							<th>' .
			$l10 .
			'</th>
							<td>' .
			_T('info_largeur_vignette',array('largeur_vignette' => interdire_scripts($Pile[$SP]['largeur']), 'hauteur_vignette' => interdire_scripts($Pile[$SP]['hauteur']))) .
			'</td>
						</tr>
						<tr>
							<th>' .
			$l11 .
			'</th>
							<td>' .
			_T('medias:info_resolution_mpx',array('resolution' => interdire_scripts(number_format(round(div(mult($Pile[$SP]['largeur'],interdire_scripts($Pile[$SP]['hauteur'])),'1000000'),'1'),'1')))) .
			'</td>
						</tr>
						')) :
				'') .
		(($t3 = strval(interdire_scripts(((intval($Pile[$SP]['duree'])) ?' ' :''))))!=='' ?
				($t3 . (	'
						<tr>
							<th>' .
			$l12 .
			'</th>
							<td>' .
			interdire_scripts(duree_en_secondes($Pile[$SP]['duree'],'precis')) .
			'</td>
						</tr>')) :
				'') .
		'
						<tr>
							<th>' .
		$l13 .
		'</th>
							<td>' .
		interdire_scripts(taille_en_octets($Pile[$SP]['taille'])) .
		'</td>
						</tr>
						<tr>
							<th>' .
		$l14 .
		'</th>
							<td>' .
		interdire_scripts(affdate(normaliser_date($Pile[$SP]['date']))) .
		'</td>
						</tr>
						</tr>
						<tr>
							<th>' .
		$l15 .
		'</th>
							<td>' .
		interdire_scripts(basename(get_spip_doc($Pile[$SP]['fichier']))) .
		'</td>
						</tr>
					</table>
					')) .
'
					' .
pipeline( 'afficher_metas_document' , array('args' => array('quoi' => 'document_desc', 'id_document' => $Pile[$SP]['id_document']), 'data' => table_valeur($Pile["vars"], (string)'data', null)) ) .
'
				</div>
			</div>
		</div>
	</div>

	<div class="actions">
		' .
(($t1 = strval(interdire_scripts((((((($Pile[$SP]['inclus'] == 'image')) AND ((defined('_BOUTON_MODE_IMAGE')?constant('_BOUTON_MODE_IMAGE'):''))) ?' ' :'')) ?' ' :''))))!=='' ?
		($t1 . (	'
		<div class="mode">
			' .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['mode'] == 'image')) ?' ' :''))))!=='' ?
			($t2 . (	bouton_action($l16,invalideur_session($Cache, generer_action_auteur('changer_mode_document',(	invalideur_session($Cache, $Pile[$SP]['id_document']) .
				'-document'),invalideur_session($Cache, self()))),'ajax') .
		'
			')) :
			'') .
	(($t2 = strval(interdire_scripts(((($Pile[$SP]['mode'] == 'image')) ?'' :' '))))!=='' ?
			($t2 . bouton_action($l17,invalideur_session($Cache, generer_action_auteur('changer_mode_document',(	invalideur_session($Cache, $Pile[$SP]['id_document']) .
				'-image'),invalideur_session($Cache, self()))),'ajax')) :
			'') .
	'
		</div>')) :
		'') .
'
		' .
BOUCLE_comptehtml_06dee466bdbba5039ec1da42f908febc($Cache, $Pile, $doublons, $Numrows, $SP)
. (	'
		' .
	((((((($Numrows['_compte']['total'] == '1')) AND (invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet'])), invalideur_session($Cache, $Pile[$SP]['id_objet']))?" ":"")))) ?' ' :'')) AND (interdire_scripts(($Pile[$SP]['vu'] == 'non'))))  ?
			(' ' . bouton_action($l18,invalideur_session($Cache, generer_action_auteur('dissocier_document',(	invalideur_session($Cache, $Pile[$SP]['id_objet']) .
				'-' .
				interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet'])) .
				'-' .
				invalideur_session($Cache, $Pile[$SP]['id_document']) .
				'-suppr-safe'),invalideur_session($Cache, self()))),'ajax',$l19,'',(($t4 = strval($Pile[$SP]['id_document']))!=='' ?
					('(function(){jQuery("#doc' . $t4 . '").animateRemove();return true;})()') :
					''))) :
			'') .
	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('dissocierdocuments', interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet'])), invalideur_session($Cache, $Pile[$SP]['id_objet']))?" ":""))))!=='' ?
			($t2 . bouton_action($l20,invalideur_session($Cache, generer_action_auteur('dissocier_document',(	invalideur_session($Cache, $Pile[$SP]['id_objet']) .
				'-' .
				interdire_scripts(invalideur_session($Cache, $Pile[$SP]['objet'])) .
				'-' .
				invalideur_session($Cache, $Pile[$SP]['id_document']) .
				'--safe'),invalideur_session($Cache, self()))),'ajax','','',(($t4 = strval($Pile[$SP]['id_document']))!=='' ?
					('(function(){jQuery("#doc' . $t4 . '").animateRemove();return true;})()') :
					''))) :
			'') .
	'
		' .
	(($t2 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'document', invalideur_session($Cache, $Pile[$SP]['id_document']))?" ":"")) ?' ' :''))))!=='' ?
			($t2 . (	'
			<div class="deplacer-modifier">
				<span class="deplacer-document" data-rang="' .
		interdire_scripts($Pile[$SP]['rang_lien']) .
		'"><img src=\'' .
		interdire_scripts(chemin_image('deplacer-16.png')) .
		'\' width=\'16\' height=\'16\' alt=\'' .
		attribut_html($l21) .
		'\' title=\'' .
		attribut_html($l21) .
		'\' /></span>
				<a href="' .
		generer_url_ecrire('document_edit',(	'id_document=' .
			$Pile[$SP]['id_document'])) .
		'" target="_blank" class="editbox" tabindex="0" role="button">' .
		$l23 .
		'</a>
			</div>
		')) :
			'')) .
'
		' .
pipeline( 'document_desc_actions' , array('args' => array('id_document' => $Pile[$SP]['id_document'], 'position' => 'document_desc', 'objet' => interdire_scripts($Pile[$SP]['objet']), 'id_objet' => $Pile[$SP]['id_objet']), 'data' => '') ) .
'
	</div>

	<div class="nettoyeur"></div>
</div>
');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_docslies @ ../plugins-dist/medias/modeles/document_desc.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/medias/modeles/document_desc.html
// Temps de compilation total: 83.004 ms
//

function html_06dee466bdbba5039ec1da42f908febc($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'
' .
BOUCLE_docslieshtml_06dee466bdbba5039ec1da42f908febc($Cache, $Pile, $doublons, $Numrows, $SP));

	return analyse_resultat_skel('html_06dee466bdbba5039ec1da42f908febc', $Cache, $page, '../plugins-dist/medias/modeles/document_desc.html');
}
?>