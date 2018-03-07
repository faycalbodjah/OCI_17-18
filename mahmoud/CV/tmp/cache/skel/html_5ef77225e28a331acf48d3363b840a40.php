<?php

/*
 * Squelette : ../plugins-dist/statistiques/formulaires/configurer_compteur.html
 * Date :      Wed, 21 Feb 2018 10:24:34 GMT
 * Compile :   Wed, 07 Mar 2018 12:35:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/statistiques/formulaires/configurer_compteur.html
// Temps de compilation total: 12.001 ms
//

function html_5ef77225e28a331acf48d3363b840a40($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_compteur\' id=\'formulaire_configurer_compteur\'>
	<h3 class=\'titrem\'>' .
interdire_scripts(filtre_balise_img_dist(chemin_image('statistique-24.png'),'','cadre-icone')) .
_T('statistiques:info_forum_statistiques') .
' ' .
interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('confstat','../plugins-dist/statistiques/formulaires/configurer_compteur.html', $Pile[0]):'')) .
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
'#formulaire_configurer_compteur" method="post"><div>
		' .
	'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>' .
'
		<div class="editer-groupe">
			<div class=\'editer configurer_activer_statistiques' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_statistiques'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_statistiques')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'checkbox\' type="checkbox" name="activer_statistiques" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'activer_statistiques', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="activer_statistiques"/>
					<label for="activer_statistiques">' .
_T('statistiques:item_gerer_statistiques') .
'</label>
				</div>
			</div>
			<div class=\'editer configurer_activer_referers' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_referers'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_referers')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'checkbox\' type="checkbox" name="activer_referers" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'activer_referers', null), 'oui'),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="activer_referers"/>
					<label for="activer_referers">' .
_T('statistiques:info_referer_oui') .
'</label>
				</div>
			</div>
			<div class=\'editer configurer_activer_captures_referers' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_captures_referers'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				<div class=\'explication\'>' .
_T('statistiques:info_question_vignettes_referer') .
'</div>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'activer_captures_referers')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'checkbox\' type="checkbox" name="activer_captures_referers" value=\'oui\' ' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'activer_captures_referers', null),true) == 'oui') ? 'checked':''))))!=='' ?
		('checked="' . $t1 . '"') :
		'') .
' id="activer_captures_referers"/>
					<label for="activer_captures_referers">' .
_T('statistiques:info_question_vignettes_referer_oui') .
'</label>
				</div>
			</div>

		</div>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>
<script type=\'text/javascript\'>
function actualise_referers(){
	if (jQuery(\'#activer_statistiques\').prop(\'checked\')) {
		jQuery(\'#formulaire_configurer_compteur .editer.configurer_activer_captures_referers\').show();
		if (jQuery(\'#activer_referers\').prop(\'checked\')) {
			jQuery(\'#formulaire_configurer_compteur .editer.configurer_activer_referers\').show();
		} else {
			jQuery(\'#formulaire_configurer_compteur .editer.configurer_activer_captures_referers\').hide();
		}
	} else {
		jQuery(\'#formulaire_configurer_compteur .editer.configurer_activer_captures_referers\').hide();
		jQuery(\'#formulaire_configurer_compteur .editer.configurer_activer_referers\').hide();
	}
}
jQuery(function($){
	$(\'#activer_statistiques, #activer_referers\').on(\'change\', actualise_referers);
	actualise_referers();
});
</script>
');

	return analyse_resultat_skel('html_5ef77225e28a331acf48d3363b840a40', $Cache, $page, '../plugins-dist/statistiques/formulaires/configurer_compteur.html');
}
?>