<?php

/*
 * Squelette : squelettes/inc/header.html
 * Date :      Wed, 07 Mar 2018 12:26:31 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   _sources
 */ 

function BOUCLE_sourceshtml_529ee9c92c546bd35271af43470ea832(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_sources';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.nom");
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
		array('squelettes/inc/header.html','html_529ee9c92c546bd35271af43470ea832','_sources',6,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
     
          
' .
interdire_scripts(supprimer_numero(typo($Pile[$SP]['nom']), "TYPO", $connect, $Pile[0])) .
'
      ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sources @ squelettes/inc/header.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc/header.html
// Temps de compilation total: 3.000 ms
//

function html_529ee9c92c546bd35271af43470ea832($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<header id="header">
  <div class="intro">
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Hello, I\'m <span class="name">' .
BOUCLE_sourceshtml_529ee9c92c546bd35271af43470ea832($Cache, $Pile, $doublons, $Numrows, $SP) .
'</span></h1>
          <p>UX Designer & Front End Developer</p>
          <a href="#about" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>');

	return analyse_resultat_skel('html_529ee9c92c546bd35271af43470ea832', $Cache, $page, 'squelettes/inc/header.html');
}
?>