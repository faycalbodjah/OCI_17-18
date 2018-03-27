<?php

/*
 * Squelette : ../prive/formulaires/editer_rubrique.html
 * Date :      Wed, 21 Feb 2018 10:24:02 GMT
 * Compile :   Wed, 21 Feb 2018 12:09:21 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/formulaires/editer_rubrique.html
// Temps de compilation total: 12.001 ms
//

function html_2c13fddfb2ff75a63abc7c79912e3e60($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'formulaire_spip formulaire_editer formulaire_editer_rubrique formulaire_editer_rubrique-' .
interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_rubrique', null), 'nouveau'),true)) .
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
	' .
(($t1 = strval(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'editable', null),true))))!=='' ?
		($t1 . (	'
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
	    <div class="editer editer_titre obligatoire' .
	((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre'))  ?
			(' ' . ' ' . 'erreur') :
			'') .
	'">
				<label for="titre">' .
	_T('public|spip|ecrire:info_titre') .
	'<em class="aide">' .
	interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('titre','../prive/formulaires/editer_rubrique.html', $Pile[0]):'')) .
	'</em></label>' .
	(($t2 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'titre')))!=='' ?
			('
				<span class=\'erreur_message\'>' . $t2 . '</span>
				') :
			'') .
	'<input type=\'text\' class=\'text\' name=\'titre\' id=\'titre\' value="' .
	sinon(table_valeur(@$Pile[0], (string)'titre', null), '') .
	'"
				placeholder="' .
	attribut_html(_T('public|spip|ecrire:titre_nouvelle_rubrique')) .
	'" />
	    </div>

	 	' .
	(($t2 = strval(filtre_chercher_rubrique_dist('',interdire_scripts(intval(entites_html(table_valeur(@$Pile[0], (string)'id_rubrique', null),true))),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_parent', null),true)),'rubrique',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_secteur', null),true)),table_valeur(table_valeur(@$Pile[0], (string)'config', null),'restreint'),'0','form_simple')))!=='' ?
			((	'<div class="editer editer_parent' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="id_parent">' .
		_T('public|spip|ecrire:titre_cadre_interieur_rubrique') .
		'<em class="aide">' .
		interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('id_parent','../prive/formulaires/editer_rubrique.html', $Pile[0]):'')) .
		'</em></label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'id_parent')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'
				') . $t2 . '
	    </div>') :
			'') .
	'
	    
	  	' .
	(((table_valeur(table_valeur(@$Pile[0], (string)'config', null),'rubriques_descriptif') == 'non') ? sinon(table_valeur(@$Pile[0], (string)'descriptif', null), ''):' ')  ?
			(' ' . (	'
	    <div class="editer editer_descriptif' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="descriptif">' .
		_T('public|spip|ecrire:texte_descriptif_rapide') .
		'</label><div class=\'explication\'>' .
		_T('public|spip|ecrire:entree_contenu_rubrique') .
		'</div>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'descriptif')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		'<textarea name=\'descriptif\' id=\'descriptif\' rows=\'2\' cols=\'40\'>' .
		table_valeur(@$Pile[0], (string)'descriptif', null) .
		'</textarea>
	    </div>')) :
			'') .
	'
	  	' .
	(((table_valeur(table_valeur(@$Pile[0], (string)'config', null),'rubriques_texte') == 'non') ? sinon(table_valeur(@$Pile[0], (string)'texte', null), ''):' ')  ?
			(' ' . (	'
	    <div class="editer editer_texte' .
		((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte'))  ?
				(' ' . ' ' . 'erreur') :
				'') .
		'">
				<label for="text_area">' .
		_T('public|spip|ecrire:info_texte_explicatif') .
		'<em class="aide">' .
		interdire_scripts((($aider=charger_fonction('aide','inc',true))?$aider('text_area','../prive/formulaires/editer_rubrique.html', $Pile[0]):'')) .
		'</em></label>' .
		(($t3 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'texte')))!=='' ?
				('
				<span class=\'erreur_message\'>' . $t3 . '</span>
				') :
				'') .
		(($t3 = strval(sinon(table_valeur(@$Pile[0], (string)'_texte_trop_long', null), '')))!=='' ?
				($t3 . '
				') :
				'') .
		'<textarea name=\'texte\' id=\'text_area\' rows=\'' .
		plus(table_valeur(table_valeur(@$Pile[0], (string)'config', null),'lignes'),'2') .
		'\' cols=\'40\'>' .
		table_valeur(@$Pile[0], (string)'texte', null) .
		'</textarea>
	    </div>')) :
			'') .
	'
	  </div>
	  ' .
	'
	  <!--extra-->
	  <p class="boutons"><input type=\'submit\' class=\'submit\' value=\'' .
	_T('public|spip|ecrire:bouton_enregistrer') .
	'\' /></p>
	</div></form>
	')) :
		'') .
'
</div>
');

	return analyse_resultat_skel('html_2c13fddfb2ff75a63abc7c79912e3e60', $Cache, $page, '../prive/formulaires/editer_rubrique.html');
}
?>