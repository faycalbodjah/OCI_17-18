<?php

/*
 * Squelette : ../prive/squelettes/contenu/auteur_edit.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 09:20:30 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/contenu/auteur_edit.html
// Temps de compilation total: 70.004 ms
//

function html_0d17d91c2abe7b8e8f8abbe7c35bf950($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
((intval(@$Pile[0]['id_auteur']))  ?
		(' ' . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('modifier', 'auteur', invalideur_session($Cache, @$Pile[0]['id_auteur']))?" ":""))) .
	'
')) :
		'') .
(!(intval(@$Pile[0]['id_auteur']))  ?
		(' ' . (	'
	' .
	invalideur_session($Cache, sinon_interdire_acces(((function_exists("autoriser")||include_spip("inc/autoriser"))&&autoriser('creer', 'auteur')?" ":""))) .
	'
')) :
		'') .
'
' .
vide($Pile['vars'][$_zzz=(string)'retour'] = interdire_scripts(((($a = entites_html(table_valeur(@$Pile[0], (string)'redirect', null),true)) OR (is_string($a) AND strlen($a))) ? $a : (intval(@$Pile[0]['id_auteur']) ? generer_url_ecrire('auteur',(	'id_auteur=' .
				@$Pile[0]['id_auteur'])):generer_url_ecrire('auteurs'))))) .
'<div class=\'cadre-formulaire-editer\'>
	<div class="entete-formulaire">
		' .
((@$Pile[0]['id_auteur'])  ?
		(' ' . (	'
		' .
	filtre_icone_verticale_dist(table_valeur($Pile["vars"], (string)'retour', null),_T('public|spip|ecrire:icone_retour'),'auteur','',(	'left retour' .
		(($t3 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
				($t3 . 'ajax preload') :
				''))) .
	'
		')) :
		'') .
'
		' .
(($t1 = strval(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'titre', null), interdire_scripts(((($a = generer_info_entite(@$Pile[0]['id_auteur'], 'auteur', 'nom')) OR (is_string($a) AND strlen($a))) ? $a : _T('public|spip|ecrire:info_sans_titre')))),true))))!=='' ?
		((	(@$Pile[0]['id_auteur'] ? _T('public|spip|ecrire:info_modifier_auteur'):_T('public|spip|ecrire:titre_ajouter_un_auteur')) .
	'
		<h1>') . $t1 . '</h1>') :
		'') .
'
	</div>

	' .
vide($Pile['vars'][$_zzz=(string)'redirect'] = interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'redirect', null), generer_url_entite(@$Pile[0]['id_auteur'],'auteur')),true))) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		' .
	vide($Pile['vars'][$_zzz=(string)'redirect'] = table_valeur($Pile["vars"], (string)'retour', null)) .
	'<div class="ajax">
	')) :
		'') .
'
	' .
executer_balise_dynamique('FORMULAIRE_EDITER_AUTEUR',
	array(interdire_scripts(entites_html(sinon(table_valeur(@$Pile[0], (string)'id_auteur', null), 'oui'),true)),table_valeur($Pile["vars"], (string)'redirect', null),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'associer_objet', null),true))),
	array('../prive/squelettes/contenu/auteur_edit.html','html_0d17d91c2abe7b8e8f8abbe7c35bf950','',12,$GLOBALS['spip_lang'])) .
(($t1 = strval(interdire_scripts(((entites_html(sinon(table_valeur(@$Pile[0], (string)'retourajax', null), ''),true)) ?' ' :''))))!=='' ?
		($t1 . (	'
		</div>
		<script type="text/javascript">/*<![CDATA[*/reloadExecPage(\'' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'exec', null),true)) .
	'\',\'#navigation,#extra\');/*]]>*/</script>
	')) :
		'') .
'

</div>
');

	return analyse_resultat_skel('html_0d17d91c2abe7b8e8f8abbe7c35bf950', $Cache, $page, '../prive/squelettes/contenu/auteur_edit.html');
}
?>