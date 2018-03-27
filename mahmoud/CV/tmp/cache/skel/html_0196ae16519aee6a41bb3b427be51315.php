<?php

/*
 * Squelette : ../plugins-dist/medias/formulaires/methodes_upload/upload.html
 * Date :      Wed, 21 Feb 2018 10:24:30 GMT
 * Compile :   Wed, 21 Feb 2018 12:11:39 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette ../plugins-dist/medias/formulaires/methodes_upload/upload.html
// Temps de compilation total: 3.001 ms
//

function html_0196ae16519aee6a41bb3b427be51315($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<div class="editer-groupe">
    <div class=\'editer editer_fichier_upload' .
((table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fichier_upload'))  ?
		(' ' . ' ' . 'erreur') :
		'') .
'\'>
        <label for=\'fichier_upload' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'domid', null),true)) .
'\'>' .
_T('public|spip|ecrire:bouton_upload') .
'</label>' .
(($t1 = strval(table_valeur(table_valeur(@$Pile[0], (string)'erreurs', null),'fichier_upload')))!=='' ?
		('
        <span class=\'erreur_message\'>' . $t1 . '</span>
        ') :
		'') .
'<input class=\'file' .
(($t1 = strval(interdire_scripts((((entites_html(table_valeur(@$Pile[0], (string)'multi', null),true) == 'non')) ?'' :' '))))!=='' ?
		($t1 . ' multi') :
		'') .
'\' type="file" name="fichier_upload[]" value=\'' .
interdire_scripts((is_array(entites_html(table_valeur(@$Pile[0], (string)'fichier_upload', null),true)) ? '':interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'fichier_upload', null),true)))) .
'\' id="fichier_upload' .
interdire_scripts(entites_html(table_valeur(@$Pile[0], (string)'domid', null),true)) .
'" size=\'11\' />
        <!--editer_fichier_upload-->
    </div>
</div>');

	return analyse_resultat_skel('html_0196ae16519aee6a41bb3b427be51315', $Cache, $page, '../plugins-dist/medias/formulaires/methodes_upload/upload.html');
}
?>