<?php

/*
 * Squelette : ../plugins/auto/skeleditor/v2.7.11/formulaires/upload_squelette.html
 * Date :      Fri, 03 Nov 2017 14:18:36 GMT
 * Compile :   Wed, 21 Feb 2018 13:41:50 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins/auto/skeleditor/v2.7.11/formulaires/upload_squelette.html
// Temps de compilation total: 9.000 ms
//

function html_3464dff315267f064662c5dc64283805($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_squelette formulaire_' .
interdire_scripts(@$Pile[0]['form']) .
'\'>
	' .
(($t1 = strval(table_valeur(@$Pile[0], (string)'message_ok', null)))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_ok">' . $t1 . '</p>') :
		'') .
'
	' .
(($t1 = strval(interdire_scripts(table_valeur(@$Pile[0], (string)'message_erreur', null))))!=='' ?
		('<p class="reponse_formulaire reponse_formulaire_erreur">' . $t1 . '</p>') :
		'') .
'
	<div class="actions">
		<div class="add">
		' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creerdans', 'squelette', interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'path_base', null),true))))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	bouton_action(concat(filtre_balise_img_dist(find_in_path('images/se-file-add-16.png'),'new'),' ',_T('skeleditor:action_nouveau')),generer_url_ecrire('skeleditor')) .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(invalideur_session($Cache, ((((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('upload', 'squelette', interdire_scripts(invalideur_session($Cache, entites_html(table_valeur(@$Pile[0], (string)'path_base', null),true))))?" ":"")) ?' ' :''))))!=='' ?
		($t1 . (	'
			' .
	bouton_action(concat(filtre_balise_img_dist(find_in_path('images/se-upload-16.png'),'upload'),' ',_T('skeleditor:action_upload')),generer_url_ecrire('skeleditor','upload=oui')) .
	'
		')) :
		'') .
'
		</div>
	</div>
	' .
(($t1 = strval(interdire_scripts(((entites_html(table_valeur(@$Pile[0], (string)'editable', null),true)) ?' ' :''))))!=='' ?
		(' ' . $t1 . (	'
	<form method=\'post\' action=\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true)) .
	'\' enctype=\'multipart/form-data\'><div>
		
		' .
		'<div>' .
	form_hidden(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'action', null),true))) .
	'<input name=\'formulaire_action\' type=\'hidden\'
		value=\'' . @$Pile[0]['form'] . '\' />' .
	'<input name=\'formulaire_action_args\' type=\'hidden\'
		value=\'' . @$Pile[0]['formulaire_args']. '\' />' .
	(!empty($Pile[0]['_hidden']) ? @$Pile[0]['_hidden'] : '') .
	'</div><ul>
	    <li class="editer_file' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'file'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="file">' .
	_T('skeleditor:label_file') .
	'</label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'file')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>') :
			'') .
	'
				<input type="file" name=\'file\' class=\'file\' id=\'file\' value="' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'file', null),true)) .
	'" />
	    </li>
	  </ul>
	  ' .
	'
	  <!--extra-->
	  <p class="boutons"><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_ajouter') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>');

	return analyse_resultat_skel('html_3464dff315267f064662c5dc64283805', $Cache, $page, '../plugins/auto/skeleditor/v2.7.11/formulaires/upload_squelette.html');
}
?>