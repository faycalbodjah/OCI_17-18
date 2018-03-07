<?php

/*
 * Squelette : ../plugins-dist/porte_plume/formulaires/configurer_porte_plume.html
 * Date :      Wed, 21 Feb 2018 10:24:39 GMT
 * Compile :   Wed, 07 Mar 2018 12:35:02 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/porte_plume/formulaires/configurer_porte_plume.html
// Temps de compilation total: 6.001 ms
//

function html_671a28e4d73b3e7049d1f072aeb588d3($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_configurer formulaire_configurer_' .
interdire_scripts(@$Pile[0]['form']) .
'\' id=\'formulaire_configurer_' .
interdire_scripts(@$Pile[0]['form']) .
'\'>
	<h3 class=\'titrem\'>' .
filtre_balise_img_dist(find_in_path('images/porte-plume-24.png'),'','cadre-icone') .
_T('barreoutils:info_porte_plume_titre') .
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
'#formulaire_configurer_' .
interdire_scripts(@$Pile[0]['form']) .
'" method="post"><div>
		' .
	'<div>' .
	form_hidden(@$Pile[0]['action']) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div>
		<input type="hidden" name="_meta_casier" value="" />' .
'
		
		<p class=\'explication\'>' .
_T('barreoutils:explication_barre_outils_public') .
'</p>
		<p class=\'explication\'>' .
_T('barreoutils:explication_barre_outils_public_2') .
'</p>
		<div class="editer-groupe">
			<div class=\'editer configurer_barre_outils_public' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'barre_outils_public'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
				<label>' .
_T('barreoutils:info_barre_outils_public') .
'</label>
				' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'barre_outils_public')))!=='' ?
		('<span class=\'erreur_message\'>' . $t1 . '</span>') :
		'') .
'
				<div class=\'choix\'>
					<input class=\'radio\' type="radio" name="barre_outils_public" value=\'oui\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'barre_outils_public', null),true) != 'non')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' id="barre_outils_public_oui"/>
					<label for="barre_outils_public_oui">' .
_T('barreoutils:label_barre_outils_public_oui') .
'</label>
				</div>
				<div class=\'choix\'>
					<input class=\'radio\' type="radio" name="barre_outils_public" value=\'non\'' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'barre_outils_public', null),true) == 'non')) ?' ' :''))))!=='' ?
		(' ' . $t1 . 'checked="checked"') :
		'') .
' id="barre_outils_public_non"/>
					<label for="barre_outils_public_non">' .
_T('barreoutils:label_barre_outils_public_non') .
'</label>
				</div>
			</div>
		</div>
		<p class=\'boutons\'><input class=\'submit\' type="submit" name="ok" value="' .
_T('public|spip|ecrire:bouton_enregistrer') .
'"/></p>
	</div></form>

</div>
');

	return analyse_resultat_skel('html_671a28e4d73b3e7049d1f072aeb588d3', $Cache, $page, '../plugins-dist/porte_plume/formulaires/configurer_porte_plume.html');
}
?>