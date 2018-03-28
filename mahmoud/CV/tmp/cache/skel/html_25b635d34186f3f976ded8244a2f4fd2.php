<?php

/*
 * Squelette : ../plugins-dist/medias/prive/objets/editer/colonne_document.html
 * Date :      Wed, 21 Feb 2018 10:24:24 GMT
 * Compile :   Wed, 21 Feb 2018 12:11:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/prive/objets/editer/colonne_document.html
// Temps de compilation total: 5.000 ms
//

function html_25b635d34186f3f976ded8244a2f4fd2($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class=\'ajax\'>
' .
executer_balise_dynamique('FORMULAIRE_JOINDRE_DOCUMENT',
	array('new',interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'id_objet', null),true)),interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'objet', null),true))),
	array('../plugins-dist/medias/prive/objets/editer/colonne_document.html','html_25b635d34186f3f976ded8244a2f4fd2','',2,$GLOBALS['spip_lang'])) .
'</div>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/inclure/colonne-documents') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../plugins-dist/medias/prive/objets/editer/colonne_document.html\',\'html_25b635d34186f3f976ded8244a2f4fd2\',\'\',4,$GLOBALS[\'spip_lang\']),\'ajax\' => ($v=( ' . argumenter_squelette('documents') . '))?$v:true), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_25b635d34186f3f976ded8244a2f4fd2', $Cache, $page, '../plugins-dist/medias/prive/objets/editer/colonne_document.html');
}
?>