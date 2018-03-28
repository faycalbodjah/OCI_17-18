<?php

/*
 * Squelette : ../prive/squelettes/hierarchie/auteur_edit.html
 * Date :      Wed, 21 Feb 2018 10:24:05 GMT
 * Compile :   Wed, 07 Mar 2018 09:20:30 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../prive/squelettes/hierarchie/auteur_edit.html
// Temps de compilation total: 1.000 ms
//

function html_c6bf813a279cd00bbebca5822fe4805c($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = 
'<'.'?php echo recuperer_fond( ' . argumenter_squelette('prive/squelettes/hierarchie/auteur') . ', array_merge('.var_export($Pile[0],1).',array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . ')), array("compil"=>array(\'../prive/squelettes/hierarchie/auteur_edit.html\',\'html_c6bf813a279cd00bbebca5822fe4805c\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>';

	return analyse_resultat_skel('html_c6bf813a279cd00bbebca5822fe4805c', $Cache, $page, '../prive/squelettes/hierarchie/auteur_edit.html');
}
?>