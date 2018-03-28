<?php

/*
 * Squelette : ../prive/formulaires/configurer_annonces.html
 * Date :      Wed, 21 Feb 2018 10:24:03 GMT
 * Compile :   Wed, 21 Feb 2018 12:20:33 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/configurer_annonces.html
// Temps de compilation total: 32.002 ms
//

function html_60e03379ad5c9557af7c305fbd470578($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

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
<h3 class=\'titrem\'><img src="' .
interdire_scripts(chemin_image('annonce-24.png')) .
'" class="cadre-icone" />' .
_T('public|spip|ecrire:info_envoi_email_automatique') .
interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('confmails','../prive/formulaires/configurer_annonces.html', $Pile[0]):'')) .
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
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
	<p class="notice">' .
	_T('public|spip|ecrire:info_hebergeur_desactiver_envoi_email') .
	'</p>
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
	vide($Pile['vars'][$_zzz=(string)'name'] = 'suivi_edito') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label>' .
	_T('public|spip|ecrire:info_suivi_activite') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<p class="explication">' .
	_T('public|spip|ecrire:info_facilite_suivi_activite') .
	'</p>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non" value="non"
						' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'
						onclick="$(this).blur();"
						onchange="if ($(this).prop(\'checked\')) $(\'#suivi_complements\').hide(\'fast\');"
					/><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non">' .
	_T('public|spip|ecrire:bouton_radio_non_envoi_annonces_editoriales') .
	'</label>
				</div>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="oui"
						' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'
						onclick="$(this).blur();"
						onchange="if ($(this).prop(\'checked\')) $(\'#suivi_complements\').show(\'fast\');"
					/><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('public|spip|ecrire:bouton_radio_envoi_annonces_adresse') .
	'</label>
				</div>
				<fieldset id="suivi_complements"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
					<div class="editer-groupe">
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'adresse_suivi') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer pleine_largeur editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_adresse') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" />
						</div>
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'adresse_suivi_inscription') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer pleine_largeur editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							' .
	vide($Pile['vars'][$_zzz=(string)'adresse_suivi'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'adresse_suivi', null),true)) OR (is_string($a) AND strlen($a))) ? $a : 'mailing@monsite.net'))) .
	'<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_adresse_desinscription') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<p class="explication">' .
	_T('public|spip|ecrire:info_config_suivi', array('adresse_suivi' => table_valeur($Pile["vars"], (string)'adresse_suivi', null))) .
	'</p>
							<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" />
						</div>
					</div>
				</fieldset>
			</div>

			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'quoi_de_neuf') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label>' .
	_T('public|spip|ecrire:info_annonce_nouveautes') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<p class="explication">' .
	_T('public|spip|ecrire:info_non_envoi_annonce_dernieres_nouveautes') .
	'</p>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non" value="non"
						' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'
						onclick="$(this).blur();"
						onchange="if ($(this).prop(\'checked\')) $(\'#neuf_complements\').hide(\'fast\');"
					/><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_non">' .
	_T('public|spip|ecrire:info_non_envoi_liste_nouveautes') .
	'</label>
				</div>
				<div class="choix">
					<input type="radio" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui" value="oui"
						' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?' ' :''))))!=='' ?
			($t2 . 'checked="checked"') :
			'') .
	'
						onclick="$(this).blur();"
						onchange="if ($(this).prop(\'checked\')) $(\'#neuf_complements\').show(\'fast\');"
					/><label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'_oui">' .
	_T('public|spip|ecrire:bouton_radio_envoi_liste_nouveautes') .
	'</label>
				</div>
				<fieldset id="neuf_complements"' .
	(($t2 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null),true) == 'oui')) ?'' :' '))))!=='' ?
			($t2 . 'style=\'display:none;\'') :
			'') .
	'>
					<div class="editer-groupe">
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'adresse_neuf') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer pleine_largeur editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_adresse') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" />
						</div>
						' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'jours_neuf') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer pleine_largeur editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
							' .
	vide($Pile['vars'][$_zzz=(string)'adresse_suivi'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'adresse_suivi', null),true)) OR (is_string($a) AND strlen($a))) ? $a : 'mailing@monsite.net'))) .
	'<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_tous_les') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
							<span class=\'erreur_message\'>' . $t2 . '</span>
							') :
			'') .
	'<input type="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" />
							' .
	_T('public|spip|ecrire:info_jours') .
	'
							<input type=\'submit\' class="submit" name=\'envoi_now\' id=\'envoi_now\' value=\'' .
	_T('public|spip|ecrire:info_envoyer_maintenant') .
	'\' />
						</div>
					</div>
				</fieldset>
			</div>

			' .
	vide($Pile['vars'][$_zzz=(string)'name'] = 'email_envoi') .
	vide($Pile['vars'][$_zzz=(string)'erreurs'] = table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),table_valeur($Pile["vars"], (string)'name', null))) .
	'<div class="editer editer_' .
	table_valeur($Pile["vars"], (string)'name', null) .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'obli', null)))!=='' ?
			(' ' . $t2) :
			'') .
	((table_valeur($Pile["vars"], (string)'erreurs', null))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'">' .
	_T('public|spip|ecrire:info_email_envoi') .
	'</label>' .
	(($t2 = strval(table_valeur($Pile["vars"], (string)'erreurs', null)))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<p class="explication">' .
	_T('public|spip|ecrire:info_email_envoi_txt') .
	'</p>
				<input type="text" class="text" name="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" id="' .
	table_valeur($Pile["vars"], (string)'name', null) .
	'" value="' .
	interdire_scripts(table_valeur(@$Pile[0], (string)table_valeur($Pile["vars"], (string)'name', null), null)) .
	'" />
			</div>

		</div>
	  ' .
	'
	  <!--extra-->
	  <p class=\'boutons\'><span class=\'image_loading\'>&nbsp;</span><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_60e03379ad5c9557af7c305fbd470578', $Cache, $page, '../prive/formulaires/configurer_annonces.html');
}
?>