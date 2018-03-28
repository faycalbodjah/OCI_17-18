<?php

/*
 * Squelette : ../plugins-dist/plan/prive/squelettes/contenu/plan.html
 * Date :      Wed, 21 Feb 2018 10:24:37 GMT
 * Compile :   Wed, 21 Feb 2018 13:26:38 GMT
 * Boucles :   _statuts, _objets_statuts
 */ 

function BOUCLE_statutshtml_6366fbf00497c2b1ad1a62e71f0401df(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(interdire_scripts(safehtml($Pile[$SP]['valeur'])));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_statuts';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"titre");
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
		array('../plugins-dist/plan/prive/squelettes/contenu/plan.html','html_6366fbf00497c2b1ad1a62e71f0401df','_statuts',31,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
						' .
vide($Pile['vars'][$_zzz=(string)'class'] = (	interdire_scripts(safehtml($Pile[$SP-1]['cle'])) .
	'-' .
	interdire_scripts(safehtml($Pile[$SP]['cle'])))) .
'
						<option class="' .
table_valeur($Pile["vars"], (string)'class', null) .
'" value="' .
table_valeur($Pile["vars"], (string)'class', null) .
'"' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true) == table_valeur($Pile["vars"], (string)'class', null))) ?' ' :''))))!=='' ?
		($t1 . ' selected="selected"') :
		'') .
'>' .
interdire_scripts(supprimer_numero(typo((isset($Pile[$SP]['titre'])?$Pile[$SP]['titre']:((isset($Pile[$SP-1]['titre'])?$Pile[$SP-1]['titre']:(@$Pile[0]['titre']))))), "TYPO", $connect, $Pile[0])) .
'</option>
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_statuts @ ../plugins-dist/plan/prive/squelettes/contenu/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_objets_statutshtml_6366fbf00497c2b1ad1a62e71f0401df(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'table';

	$command['source'] = array(plan_lister_objets_rubrique_statuts_auteur(''));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_objets_statuts';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"titre");
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
		array('../plugins-dist/plan/prive/squelettes/contenu/plan.html','html_6366fbf00497c2b1ad1a62e71f0401df','_objets_statuts',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<optgroup label="' .
interdire_scripts(_T(objet_info(safehtml($Pile[$SP]['cle']),'texte_objets'))) .
'" class="' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'">
					' .
BOUCLE_statutshtml_6366fbf00497c2b1ad1a62e71f0401df($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</optgroup>
		');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_objets_statuts @ ../plugins-dist/plan/prive/squelettes/contenu/plan.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../plugins-dist/plan/prive/squelettes/contenu/plan.html
// Temps de compilation total: 12.001 ms
//

function html_6366fbf00497c2b1ad1a62e71f0401df($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<script type="text/javascript">
jQuery(function($){
	$(\'body.plan #contenu #mytree_actions .pliage\').html(
		"<a href=\\"#\\" onClick=\\"jQuery(\'#racine\').jstree(\'open_all\'); return false;\\">' .
_T('public|spip|ecrire:lien_tout_deplier') .
'</a> | " +
		"<a href=\\"#\\" onClick=\\"jQuery(\'#racine\').jstree(\'close_all\'); return false;\\">' .
_T('public|spip|ecrire:lien_tout_replier') .
'</a>"
	);
});
</script>

<div id="mytree_actions">
	<input id="mytree_search" class="input" type="text" value="" placeholder="' .
attribut_html(_T('public|spip|ecrire:info_rechercher')) .
'">

	<span class=\'pliage\'>
		
		' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'lister', null),true)) ?'' :' '))))!=='' ?
		($t1 . (	'
			<a href="' .
	parametre_url(self(),'lister','tout') .
	'">' .
	_T('public|spip|ecrire:info_tout_afficher') .
	'</a>
		')) :
		'') .
'
	</span>

' .
vide($Pile['vars'][$_zzz=(string)'statut'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true) ? interdire_scripts(filtre_end(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true),'-'))):interdire_scripts(@$Pile[0]['null'])))) .
'
' .
vide($Pile['vars'][$_zzz=(string)'objet'] = interdire_scripts((entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true) ? interdire_scripts(filtre_reset(filtre_explode_dist(entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true),'-'))):interdire_scripts(@$Pile[0]['null'])))) .
'

	<span class=\'statut ' .
table_valeur($Pile["vars"], (string)'objet', null) .
'\'>
		' .
(($t1 = BOUCLE_objets_statutshtml_6366fbf00497c2b1ad1a62e71f0401df($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
			<form method="GET" action="' .
		self() .
		'" onChange="this.submit(); return true;">
			' .
		form_hidden(parametre_url(self(),'statuts','')) .
		'
			<select name="statuts" id="selection_statut">
				<option value=""' .
		(($t3 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'statuts', null),true)) ?'' :' '))))!=='' ?
				($t3 . ' selected="selected"') :
				'') .
		'>' .
		_T('plan:tous_les_statuts') .
		'</option>
		') . $t1 . '
			</select>
			</form>
		') :
		'') .
'
	</span>
</div>

' .
boite_ouvrir('', 'simple') .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/plan') . ', array(\'statut\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'statut', null)) . ',
	\'objet\' => ' . argumenter_squelette(table_valeur($Pile["vars"], (string)'objet', null)) . ',
	\'lister\' => ' . argumenter_squelette(@$Pile[0]['lister']) . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'../plugins-dist/plan/prive/squelettes/contenu/plan.html\',\'html_6366fbf00497c2b1ad1a62e71f0401df\',\'\',44,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('plan') . '))?$v:true), _request("connect"));
?'.'>
' .
boite_fermer() .
'
');

	return analyse_resultat_skel('html_6366fbf00497c2b1ad1a62e71f0401df', $Cache, $page, '../plugins-dist/plan/prive/squelettes/contenu/plan.html');
}
?>