<?php

/*
 * Squelette : ../plugins-dist/compresseur/formulaires/configurer_compresseur.html
 * Date :      Wed, 21 Feb 2018 10:24:17 GMT
 * Compile :   Wed, 07 Mar 2018 12:35:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/compresseur/formulaires/configurer_compresseur.html
// Temps de compilation total: 17.001 ms
//

function html_e4c8606db3ba5923c1159d279769090f($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_compresseur\' id=\'formulaire_configurer_compresseur\'>
	<h3 class=\'titrem\'>' .
filtre_balise_img_dist(find_in_path('images/compresseur-24.png'),'','cadre-icone') .
_T('compresseur:info_compresseur_titre') .
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

	<form action="' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
'#formulaire_configurer_compresseur" method="post"><div>
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
vide($Pile['vars'][$_zzz=(string)'name'] = 'url_statique_ressources') .
vide($Pile['vars'][$_zzz=(string)'obli'] = '') .
vide($Pile['vars'][$_zzz=(string)'defaut'] = '') .
vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
'<div class="editer editer_' .
table_valeur($Pile["vars"], (string)'name', null) .
(($t1 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
		(' ' . $t1) :
		'') .
((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'">
				<label for="' .
table_valeur($Pile["vars"], (string)'name', null) .
'">' .
_T('compresseur:label_url_statique_ressources') .
'</label>' .
(($t1 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
		('
				<span class=\'erreur_message\'>' . $t1 . '</span>
				') :
		'') .
'<input type="text" name="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" class="text" value="' .
interdire_scripts(sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) .
'" id="' .
table_valeur($Pile["vars"], (string)'name', null) .
'" ' .
((('') AND (table_valeur($Pile["vars"], (string)'obli', null)))  ?
		(' ' . 'required=\'required\'') :
		'') .
'/>
				<p class="explication">' .
_T('compresseur:explication_url_statique_ressources') .
'</p>
				<style>
					.editer_url_statique_ressources input.text{padding-right: 32px;background-image: none;}
					.editer_url_statique_ressources input.text{background-position: right center;background-repeat: no-repeat; background-image:url(' .
interdire_scripts(protocole_implicite(url_absolue(chemin_image('ok-24.png'),interdire_scripts(concat(((($a = sinon(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null), table_valeur($Pile["vars"], (string)'defaut', null))) OR (is_string($a) AND strlen($a))) ? $a : spip_htmlspecialchars(sinon($GLOBALS['meta']['adresse_site'],'.'))),'/',interdire_scripts(eval('return '.'_DIR_RACINE?_DIR_RESTREINT_ABS:\'\''.';'))))))) .
');}
				</style>
			</div>
			<div class=\'fieldset\'>
				<fieldset>
					<legend>' .
_T('compresseur:titre_compacter_script_css') .
'</legend>
					<p>' .
_T('compresseur:texte_compacter_script_css') .
'</p>
					<div class="editer-groupe">
						<div class=\'editer configurer_auto_compress_js' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_js'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
							<label>' .
_T('compresseur:info_question_activer_compactage_js') .
'</label>
							' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_js')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_js" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_js', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="auto_compress_js"/>
								<label for="auto_compress_js">' .
_T('compresseur:item_compresseur_js') .
'</label>
							</div>
						</div>
						<div class=\'editer configurer_auto_compress_css' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_css'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
							<label>' .
_T('compresseur:info_question_activer_compactage_css') .
'</label>
							' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'auto_compress_css')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
							<div class=\'choix\'>
								<input class=\'checkbox\' type="checkbox" name="auto_compress_css" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'auto_compress_css', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="auto_compress_css"/>
								<label for="auto_compress_css">' .
_T('compresseur:item_compresseur_css') .
'</label>
							</div>
						</div>
					</div>
					<p class=\'notice\'>' .
_T('compresseur:texte_compacter_avertissement') .
'</p>
				</fieldset>
			</div>
		</div>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>
');

	return analyse_resultat_skel('html_e4c8606db3ba5923c1159d279769090f', $Cache, $page, '../plugins-dist/compresseur/formulaires/configurer_compresseur.html');
}
?>