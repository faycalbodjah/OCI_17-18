<?php

/*
 * Squelette : squelettes/inc/aboutsection.html
 * Date :      Wed, 07 Mar 2018 12:16:44 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   n, s, _sources
 */ 

function BOUCLEnhtml_140de96bff6d39fde273e3491a559b08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = 'n';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.texte",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "2"));
		$command['join'] = array();
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
		array('squelettes/inc/aboutsection.html','html_140de96bff6d39fde273e3491a559b08','n',5,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= (
' ' .
interdire_scripts(propre($Pile[$SP]['texte'], $connect, $Pile[0])) .
' ');
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLEn @ squelettes/inc/aboutsection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLEshtml_140de96bff6d39fde273e3491a559b08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'articles';
		$command['id'] = 's';
		$command['from'] = array('articles' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array();
		$command['select'] = array("articles.id_article",
		"articles.lang",
		"articles.titre");
		$command['orderby'] = array();
		$command['where'] = 
			array(
quete_condition_statut('articles.statut','publie,prop,prepa/auteur','publie',''), 
quete_condition_postdates('articles.date',''), 
			array('=', 'articles.id_article', "2"));
		$command['join'] = array();
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
		array('squelettes/inc/aboutsection.html','html_140de96bff6d39fde273e3491a559b08','s',9,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	lang_select($GLOBALS['spip_lang']);
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		lang_select_public($Pile[$SP]['lang'], '', $Pile[$SP]['titre']);
		$t0 .= 
((!is_array($l = quete_logo('id_article', 'ON', $Pile[$SP]['id_article'],'', 0))) ? '':
 ("<img class=\"spip_logo spip_logos\" alt=\"\" src=\"$l[0]\"" . $l[2] .  ($l[1] ? " onmouseover=\"this.src='$l[1]'\" onmouseout=\"this.src='$l[0]'\"" : "") . ' />'));
		lang_select();
	}
	lang_select();
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLEs @ squelettes/inc/aboutsection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}


function BOUCLE_sourceshtml_140de96bff6d39fde273e3491a559b08(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_sources';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.bio");
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
		array('squelettes/inc/aboutsection.html','html_140de96bff6d39fde273e3491a559b08','_sources',13,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
     
          <p>' .
interdire_scripts(propre($Pile[$SP]['bio'], $connect, $Pile[0])) .
'</p>

      ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sources @ squelettes/inc/aboutsection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc/aboutsection.html
// Temps de compilation total: 10.000 ms
//

function html_140de96bff6d39fde273e3491a559b08($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>' .
BOUCLEnhtml_140de96bff6d39fde273e3491a559b08($Cache, $Pile, $doublons, $Numrows, $SP) .
'</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">' .
BOUCLEshtml_140de96bff6d39fde273e3491a559b08($Cache, $Pile, $doublons, $Numrows, $SP) .
'</div>
      <div class="col-md-8 col-md-offset-2">
        <div class="about-text">
	    
	' .
BOUCLE_sourceshtml_140de96bff6d39fde273e3491a559b08($Cache, $Pile, $doublons, $Numrows, $SP) .
'
          
          <p class="text-center"></p>
        </div>
      </div>
    </div>
  </div>
</div>');

	return analyse_resultat_skel('html_140de96bff6d39fde273e3491a559b08', $Cache, $page, 'squelettes/inc/aboutsection.html');
}
?>