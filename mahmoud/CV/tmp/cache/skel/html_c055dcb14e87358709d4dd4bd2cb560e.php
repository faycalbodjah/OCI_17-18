<?php

/*
 * Squelette : squelettes/inc/head.html
 * Date :      Wed, 07 Mar 2018 10:13:05 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   _sources
 */ 

function BOUCLE_sourceshtml_c055dcb14e87358709d4dd4bd2cb560e(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_sources';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("1");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('L2.statut','!','publie',''), 
quete_condition_postdates('L2.date',''), 
quete_condition_statut('auteurs.statut','!5poubelle','!5poubelle',''));
		$command['join'] = array('L1' => array('auteurs','id_auteur'), 'L2' => array('L1','id_article','id_objet','L1.objet='.sql_quote('article')));
		$command['limit'] = '';
		$command['having'] = 
			array();
	}
	if (defined("_BOUCLE_PROFILER")) $timer = time()+(float)microtime();
	$t0 = "";
	// REQUETE
	$iter = IterFactory::create(
		"SQL",
		$command,
		array('squelettes/inc/head.html','html_c055dcb14e87358709d4dd4bd2cb560e','_sources',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$Numrows['_sources']['total'] = @intval($iter->count());
	$SP++;
	// RESULTATS
	
	$t0 = str_repeat('
     
          

      ', $Numrows['_sources']['total']);
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sources @ squelettes/inc/head.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc/head.html
// Temps de compilation total: 12.001 ms
//

function html_c055dcb14e87358709d4dd4bd2cb560e($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> ' .
BOUCLE_sourceshtml_c055dcb14e87358709d4dd4bd2cb560e($Cache, $Pile, $doublons, $Numrows, $SP) .
'
- UX Designer & Front End Developer</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="' .
find_in_path('img/favicon.ico') .
'" type="image/x-icon">
<link rel="apple-touch-icon" href="' .
find_in_path('img/apple-touch-icon.png') .
'">
<link rel="apple-touch-icon" sizes="72x72" href="' .
find_in_path('img/apple-touch-icon-72x72.png') .
'">
<link rel="apple-touch-icon" sizes="114x114" href="' .
find_in_path('img/apple-touch-icon-114x114.png') .
'">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="' .
find_in_path('css/bootstrap.css') .
'">
<link rel="stylesheet" type="text/css" href="' .
find_in_path('fonts/font-awesome/css/font-awesome.css') .
'">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="' .
find_in_path('css/style.css') .
'">
<link rel="stylesheet" type="text/css" href="' .
find_in_path('css/prettyPhoto.css') .
'">
<link href=\'http://fonts.googleapis.com/css?family=Lato:400,700,900,300\' rel=\'stylesheet\' type=\'text/css\'>
<link href=\'http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300\' rel=\'stylesheet\' type=\'text/css\'>
<script type="text/javascript" src="' .
find_in_path('js/modernizr.custom.js') .
'"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>');

	return analyse_resultat_skel('html_c055dcb14e87358709d4dd4bd2cb560e', $Cache, $page, 'squelettes/inc/head.html');
}
?>