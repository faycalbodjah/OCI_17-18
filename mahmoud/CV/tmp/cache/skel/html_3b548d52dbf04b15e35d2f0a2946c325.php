<?php

/*
 * Squelette : ../prive/formulaires/configurer_preferences_menus.html
 * Date :      Wed, 21 Feb 2018 10:24:03 GMT
 * Compile :   Wed, 07 Mar 2018 12:34:12 GMT
 * Boucles :   _menusous, _menu
 */ 

function BOUCLE_menusoushtml_3b548d52dbf04b15e35d2f0a2946c325(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(interdire_scripts(safehtml((isset($Pile[$SP]['sousmenu'])?$Pile[$SP]['sousmenu']:(@$Pile[0]['sousmenu'])))));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menusous';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		".cle",
		"libelle");
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
		array('../prive/formulaires/configurer_preferences_menus.html','html_3b548d52dbf04b15e35d2f0a2946c325','_menusous',25,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
							<div class="item choix">
								<input class=\'text positionner\' type="text" name="menus_favoris[' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
']" value="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'menus_favoris/' .
	interdire_scripts(safehtml($Pile[$SP]['cle']))), null),true)) .
'" id="menu_fav_' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'" size="1">
								<label for="menu_fav_' .
interdire_scripts(safehtml($Pile[$SP]['cle'])) .
'">' .
interdire_scripts(_T(safehtml((isset($Pile[$SP]['libelle'])?$Pile[$SP]['libelle']:((isset($Pile[$SP-1]['libelle'])?$Pile[$SP-1]['libelle']:(@$Pile[0]['libelle']))))))) .
'</label>
							</div>
							');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menusous @ ../prive/formulaires/configurer_preferences_menus.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_menuhtml_3b548d52dbf04b15e35d2f0a2946c325(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$in = array();
	if (!(is_array($a = (array('menu_accueil')))))
		$in[]= $a;
	else $in = array_merge($in, $a);
	$command['sourcemode'] = 'tableau';

	$command['source'] = array(table_valeur($Pile["vars"], (string)'boutons', null));

	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_menu';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".valeur",
		"sousmenu",
		"libelle");
		$command['orderby'] = array();
		$command['join'] = array();
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	$command['where'] = 
			array(
			array('LIKE', 'cle', "'menu_%'"), sql_in('cle',sql_quote($in),'NOT'));
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"DATA",
		$command,
		array('../prive/formulaires/configurer_preferences_menus.html','html_3b548d52dbf04b15e35d2f0a2946c325','_menu',24,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
					' .
(($t1 = BOUCLE_menusoushtml_3b548d52dbf04b15e35d2f0a2946c325($Cache, $Pile, $doublons, $Numrows, $SP))!=='' ?
		((	'
						<div class="editer menus_favoris pleine_largeur">
							<label>' .
		interdire_scripts(_T(safehtml((isset($Pile[$SP]['libelle'])?$Pile[$SP]['libelle']:(@$Pile[0]['libelle']))))) .
		'</label>
							' .
		(($t3 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/menus_favoris', null),true))))!=='' ?
				('<span class=\'erreur_message\'>' . $t3 . '</span>') :
				'') .
		'
							') . $t1 . '
						</div>
					') :
		'') .
'
					');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_menu @ ../prive/formulaires/configurer_preferences_menus.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/configurer_preferences_menus.html
// Temps de compilation total: 19.002 ms
//

function html_3b548d52dbf04b15e35d2f0a2946c325($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="formulaire_spip formulaire_configurer formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id', null), 'nouveau'),true)) .
'">
	<h3 class=\'titrem\'>' .
_T('public|spip|ecrire:titre_configurer_preferences_menus') .
'</h3>
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_ok', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'

	<form method=\'post\' action=\'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'\'><div>
		' .
	'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>

		' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('webmestre')?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
		<div class=\'editer editer_activer_menudev' .
	(($t2 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'erreurs/activer_menudev', null),true)) ?' ' :''))))!=='' ?
			(' ' . $t2 . 'erreur') :
			'') .
	'\'>
			' .
	(($t2 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'erreurs/activer_menudev', null),true))))!=='' ?
			('<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
			<div class=\'choix\'>
				<input type="hidden" name="activer_menudev" value="non" />
				<input class=\'checkbox\' type="checkbox" name="activer_menudev" value=\'oui\' ' .
	(($t2 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'activer_menudev', null), 'non'),true) == 'oui') ? 'checked':''))))!=='' ?
			('checked="' . $t2 . '"') :
			'') .
	' id="activer_menudev"/>
				<label for="activer_menudev">' .
	_T('public|spip|ecrire:info_activer_menu_developpement') .
	'</label>
			</div>
		</div>')) :
		'') .
'

		' .
vide($Pile['vars'][$_zzz=(string)'boutons'] = trier_boutons_enfants_par_favoris_alpha(definir_barre_boutons(array(),'0'))) .
'<div class=\'menus_favoris fieldset\'>
			<fieldset>
				<legend>' .
_T('public|spip|ecrire:titre_preference_menus_favoris') .
'</legend>
				<div class="editer-groupe deux_colonnes">
					' .
BOUCLE_menuhtml_3b548d52dbf04b15e35d2f0a2946c325($Cache, $Pile, $doublons, $Numrows, $SP) .
'
				</div>
			</fieldset>
		</div>

		' .
'
		<!--extra-->
		<p class=\'boutons\'>
			<span class=\'image_loading\'>&nbsp;</span>
			<input type=\'submit\' name="reset" class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_reinitialiser_aux_valeurs_par_defaut') .
'\' />
			<input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' />
		</p>
	</div></form>
</div>
<style type="text/css">
	.formulaire_spip .choix .positionner {
		width:2.2em;
		text-align:center;
	}
</style>
<script type="text/javascript">
jQuery(function($) {
	$(\'.formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' form\').on(\'click\', \'.choix label\', function(){
		var $me = $(this);
		var $parent = $me.closest(\'.editer\');
		var $input = $me.siblings(\'.positionner\');
		if ($input.val()) {
			$input.val("");
			var trier = [];
			$parent.find(\'.positionner\').each(function(){
				if ($(this).val()) {
					trier.push({id: $(this).attr(\'id\'), val: parseInt($(this).val()) });
				}
			});
			trier.sort(function(a,b) { return a.val - b.val; });
			var i = 1;
			$.each(trier, function(k, a) {
				$parent.find(\'#\' + a.id).val(i);
				i++;
			});
		} else {
			var max = 0;
			$parent.find(\'.positionner\').each(function(){
				if ($(this).val() > max) {
					max = $(this).val();
				}
			});
			$input.val(parseInt(max) + 1);
		}
		return false;
	});
});
</script>');

	return analyse_resultat_skel('html_3b548d52dbf04b15e35d2f0a2946c325', $Cache, $page, '../prive/formulaires/configurer_preferences_menus.html');
}
?>