<?php

/*
 * Squelette : ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html
 * Date :      Wed, 21 Feb 2018 10:24:52 GMT
 * Compile :   Wed, 07 Mar 2018 09:21:18 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html
// Temps de compilation total: 5.001 ms
//

function html_e09c22eb438d448d83a37df2e27c793b($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="nettoyeur"></div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-envoyes') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'destinataire\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'type\' => ' . argumenter_squelette('normal') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html\',\'html_e09c22eb438d448d83a37df2e27c793b\',\'\',2,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/objets/liste/messages-recus') . ', array_merge('.var_export($Pile[0],1).',array(\'id_auteur\' => ' . argumenter_squelette(interdire_scripts(invalideur_session($Cache, table_valeur($GLOBALS["visiteur_session"], (string)'id_auteur', null)))) . ',
	\'destinataire\' => ' . argumenter_squelette(interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true))) . ',
	\'statut\' => ' . argumenter_squelette('publie') . ',
	\'type\' => ' . argumenter_squelette('normal') . ',
	\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html\',\'html_e09c22eb438d448d83a37df2e27c793b\',\'\',3,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette(@$Pile[0]['ajax']) . '))?$v:true), _request("connect"));
?'.'>
' .
filtre_icone_verticale_dist(parametre_url(generer_url_ecrire('message_edit',(	'new=oui&to=' .
	interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_auteur', null),true)))),'redirect',self()),_T('public|spip|ecrire:info_envoyer_message_prive'),'message-24.png','new','right') .
'

');

	return analyse_resultat_skel('html_e09c22eb438d448d83a37df2e27c793b', $Cache, $page, '../plugins-dist/organiseur/prive/squelettes/inclure/organiseur-interventions.html');
}
?>