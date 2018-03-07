<?php

/*
 * Squelette : ../prive/formulaires/configurer_preferences.html
 * Date :      Wed, 21 Feb 2018 10:24:03 GMT
 * Compile :   Wed, 07 Mar 2018 12:34:12 GMT
 * Boucles :   _couleurs
 */ 

function BOUCLE_couleurshtml_845cd3616ff6007c1e95166edb0a1ad6(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	$command['source'] = array(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'couleurs', null),true)));
	$command['sourcemode'] = 'table';
	if (!isset($command['table'])) {
		$command['table'] = '';
		$command['id'] = '_couleurs';
		$command['from'] = array();
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array(".cle",
		".valeur");
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
		array('../prive/formulaires/configurer_preferences.html','html_845cd3616ff6007c1e95166edb0a1ad6','_couleurs',77,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	
	$l1 = _T('public|spip|ecrire:choix_couleur_interface');$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
interdire_scripts($Pile[$SP]['cle']) .
'\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == interdire_scripts($Pile[$SP]['cle']))) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="' .
interdire_scripts($Pile[$SP]['cle']) .
'"
					onchange="if (this.checked) jQuery(\'head>link#csspriveedef\').clone().removeAttr(\'id\').appendTo(jQuery(\'head\')).attr(\'href\', \'' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'_couleurs_url/' .
	interdire_scripts($Pile[$SP]['cle'])), null),true)) .
'\');" />
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_' .
interdire_scripts($Pile[$SP]['cle']) .
'">
						<img src="' .
find_in_path('rien.gif') .
'" alt="" width="16" height="16" style="background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_foncer',table_valeur($Pile[$SP]['valeur'], 'couleur_foncee')))))!=='' ?
		('#' . $t1) :
		'') .
';" />
						<img src="' .
find_in_path('rien.gif') .
'" alt="' .
attribut_html($l1) .
' 1" width="16" height="16" style="background-color:' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'couleur_foncee')) .
';" />
						<img src="' .
find_in_path('rien.gif') .
'" alt="" width="16" height="16" style="background-color:' .
interdire_scripts(table_valeur($Pile[$SP]['valeur'], 'couleur_claire')) .
';" />
						<img src="' .
find_in_path('rien.gif') .
'" alt="" width="16" height="16" style="background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',table_valeur($Pile[$SP]['valeur'], 'couleur_claire')))))!=='' ?
		('#' . $t1) :
		'') .
';" />
						<img src="' .
find_in_path('rien.gif') .
'" alt="" width="16" height="16" style="background-color:' .
(($t1 = strval(interdire_scripts(filtrer('couleur_eclaircir',table_valeur($Pile[$SP]['valeur'], 'couleur_claire'),'0.75'))))!=='' ?
		('#' . $t1) :
		'') .
';" />
					</label>
				</div>
				');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_couleurs @ ../prive/formulaires/configurer_preferences.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette ../prive/formulaires/configurer_preferences.html
// Temps de compilation total: 62.003 ms
//

function html_845cd3616ff6007c1e95166edb0a1ad6($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
_T('public|spip|ecrire:titre_configurer_preferences') .
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
		<div class="editer-groupe">
		  	' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'spip_ecran') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label>' .
_T('public|spip|ecrire:label_taille_ecran') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_etroit\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'large')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="etroit"
					onchange="if (this.checked) jQuery(\'body\').addClass(\'etroit\').removeClass(\'large\'); else jQuery(\'body\').removeClass(\'etroit\').addClass(\'large\');"/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_etroit">' .
_T('public|spip|ecrire:info_petit_ecran') .
'</label>
				</div>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_large\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'large')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="large"
					onchange="if (this.checked) jQuery(\'body\').addClass(\'large\').removeClass(\'etroit\'); else jQuery(\'body\').removeClass(\'large\').addClass(\'etroit\');"/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_large">' .
_T('public|spip|ecrire:info_grand_ecran') .
'</label>
				</div>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'display_navigation') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label>' .
_T('public|spip|ecrire:label_texte_et_icones_navigation') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'navigation_sans_icone')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="navigation_sans_icone"
					onchange="if (this.checked) jQuery(\'body\').addClass(\'navigation_sans_icone\').removeClass(\'navigation_avec_icones\'); else jQuery(\'body\').removeClass(\'navigation_sans_icone\').addClass(\'navigation_avec_icones\');"/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1">' .
_T('public|spip|ecrire:lien_afficher_texte_seul') .
'</label>
				</div>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'navigation_sans_icone')) ?'' :' '))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="navigation_avec_icones"
					onchange="if (!this.checked) jQuery(\'body\').addClass(\'navigation_sans_icone\').removeClass(\'navigation_avec_icones\'); else jQuery(\'body\').removeClass(\'navigation_sans_icone\').addClass(\'navigation_avec_icones\');"/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2">' .
_T('public|spip|ecrire:lien_afficher_texte_icones') .
'</label>
				</div>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'display') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label>' .
_T('public|spip|ecrire:label_texte_et_icones_page') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '1')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="1"
					onchange="jQuery(\'body\').removeClass(\'icones_texte\').removeClass(\'icones_img_texte\').removeClass(\'icones_img\');
					if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_texte\')
					else if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_img_texte\')
					else jQuery(\'body\').addClass(\'icones_img\');"
					/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1">' .
_T('public|spip|ecrire:lien_afficher_texte_seul') .
'</label>
				</div>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '2')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="2"
					onchange="jQuery(\'body\').removeClass(\'icones_texte\').removeClass(\'icones_img_texte\').removeClass(\'icones_img\');
					if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_texte\')
					else if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_img_texte\')
					else jQuery(\'body\').addClass(\'icones_img\');"
					/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2">' .
_T('public|spip|ecrire:lien_afficher_texte_icones') .
'</label>
				</div>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'\' id=\'' .
table_valeur($Pile["vars"], (string)'name', null) .
'_3\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == '3')) ?' ' :''))))!=='' ?
		($t1 . 'checked="checked" ') :
		'') .
'value="3"
					onchange="jQuery(\'body\').removeClass(\'icones_texte\').removeClass(\'icones_img_texte\').removeClass(\'icones_img\');
					if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_1\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_texte\')
					else if (jQuery(\'#' .
table_valeur($Pile["vars"], (string)'name', null) .
'_2\').prop(\'checked\')) jQuery(\'body\').addClass(\'icones_img_texte\')
					else jQuery(\'body\').addClass(\'icones_img\');"
					/>
					<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'_3">' .
_T('public|spip|ecrire:lien_afficher_icones_seuls') .
'</label>
				</div>
			</div>
			' .
vide($Pile['vars'][$_zzz=(string)'name'] = 'couleur') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)(	'erreurs/' .
		table_valeur($Pile["vars"], (string)'name', null)), null),true))) .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label>' .
_T('public|spip|ecrire:titre_changer_couleur_interface') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
BOUCLE_couleurshtml_845cd3616ff6007c1e95166edb0a1ad6($Cache, $Pile, $doublons, $Numrows, $SP) .
'
			</div>
			<div class="editer editer_imessage">
				<label>' .
_T('public|spip|ecrire:info_liste_redacteurs_connectes') .
'</label>
				<p class=\'explication\'>' .
_T('public|spip|ecrire:texte_auteur_messagerie') .
'</p>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'imessage\' value=\'oui\' ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'imessage', null),true) != 'non')) ?' ' :''))))!=='' ?
		($t1 . ' checked=\'checked\'') :
		'') .
' id=\'perso_activer_imessage_on\' ' .
table_valeur($Pile["vars"], (string)'disable', null) .
'/>
					<label for=\'perso_activer_imessage_on\'>' .
_T('public|spip|ecrire:bouton_radio_apparaitre_liste_redacteurs_connectes') .
'</label>
				</div>
				<div class="choix">
					<input type=\'radio\' class=\'radio\' name=\'imessage\' value=\'non\' ' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'imessage', null),true) == 'non')) ?' ' :''))))!=='' ?
		($t1 . ' checked=\'checked\'') :
		'') .
' id=\'perso_activer_imessage_off\' ' .
table_valeur($Pile["vars"], (string)'disable', null) .
'/>
					<label for=\'perso_activer_imessage_off\'>' .
_T('public|spip|ecrire:bouton_radio_non_apparaitre_liste_redacteurs_connectes') .
'</label>
				</div>
			</div>
		</div>
		' .
'
		<!--extra-->
		<p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
_T('public|spip|ecrire:bouton_enregistrer') .
'\' /></p>
	</div></form>
	<script type="text/javascript">
		jQuery(function($){
			$(\'div.formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' form\').find(\'input.radio, input.checkbox\').on(\'change\',function(){$(this).parents(\'form\').submit();});
			$(\'div.formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
' .boutons\').hide();
		});
	</script>

</div>
');

	return analyse_resultat_skel('html_845cd3616ff6007c1e95166edb0a1ad6', $Cache, $page, '../prive/formulaires/configurer_preferences.html');
}
?>