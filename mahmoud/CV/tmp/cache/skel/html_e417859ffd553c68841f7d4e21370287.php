<?php

/*
 * Squelette : squelettes/inc/closebody.html
 * Date :      Wed, 07 Mar 2018 00:59:58 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/closebody.html
// Temps de compilation total: 0.000 ms
//

function html_e417859ffd553c68841f7d4e21370287($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = '</body>
</html>';

	return analyse_resultat_skel('html_e417859ffd553c68841f7d4e21370287', $Cache, $page, 'squelettes/inc/closebody.html');
}
?>