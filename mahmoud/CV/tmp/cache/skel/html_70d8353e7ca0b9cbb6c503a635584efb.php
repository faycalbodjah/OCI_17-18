<?php

/*
 * Squelette : squelettes/index.html
 * Date :      Wed, 07 Mar 2018 01:00:13 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/index.html
// Temps de compilation total: 6.000 ms
//

function html_70d8353e7ca0b9cbb6c503a635584efb($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/head') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',1,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/openbody') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',2,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/header') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',3,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/navigation') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',4,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/navlink') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',5,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/linkaboutsection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',6,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/aboutsection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',7,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/skillssection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',8,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/profoliosection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',9,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/AchievementsSection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',10,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/resumesection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',11,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/educationsection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',12,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/contactsection') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',13,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
' .

'<'.'?php echo recuperer_fond( ' . argumenter_squelette('inc/closebody') . ', array(\'lang\' => ' . argumenter_squelette($GLOBALS["spip_lang"]) . '), array("compil"=>array(\'squelettes/index.html\',\'html_70d8353e7ca0b9cbb6c503a635584efb\',\'\',14,$GLOBALS[\'spip_lang\'])), _request("connect"));
?'.'>
');

	return analyse_resultat_skel('html_70d8353e7ca0b9cbb6c503a635584efb', $Cache, $page, 'squelettes/index.html');
}
?>