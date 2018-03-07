<?php

/*
 * Squelette : squelettes/inc/contactsection.html
 * Date :      Wed, 07 Mar 2018 12:32:46 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   _sources
 */ 

function BOUCLE_sourceshtml_c3221cb01ae9c797bd5e8b632c548bff(&$Cache, &$Pile, &$doublons, &$Numrows, $SP) {

	static $command = array();
	static $connect;
	$command['connect'] = $connect = '';
	if (!isset($command['table'])) {
		$command['table'] = 'auteurs';
		$command['id'] = '_sources';
		$command['from'] = array('auteurs' => 'spip_auteurs','L1' => 'spip_auteurs_liens','L2' => 'spip_articles');
		$command['type'] = array();
		$command['groupby'] = array("auteurs.id_auteur");
		$command['select'] = array("auteurs.email");
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
		array('squelettes/inc/contactsection.html','html_c3221cb01ae9c797bd5e8b632c548bff','_sources',14,$GLOBALS['spip_lang'])
	);
	if (!$iter->err()) {
	$SP++;
	// RESULTATS
	while ($Pile[$SP]=$iter->fetch()) {

		$t0 .= (
'
     
          
' .
interdire_scripts($Pile[$SP]['email']) .
'
      ');
	}
	$iter->free();
	}
	if (defined("_BOUCLE_PROFILER")
	AND 1000*($timer = (time()+(float)microtime())-$timer) > _BOUCLE_PROFILER)
		spip_log(intval(1000*$timer)."ms BOUCLE_sources @ squelettes/inc/contactsection.html","profiler"._LOG_AVERTISSEMENT);
	return $t0;
}

//
// Fonction principale du squelette squelettes/inc/contactsection.html
// Temps de compilation total: 5.001 ms
//

function html_c3221cb01ae9c797bd5e8b632c548bff($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker fa-2x"></i>
        <p>88 Rue Francoeur,<br>
          Viry Châtillion, </p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>' .
BOUCLE_sourceshtml_c3221cb01ae9c797bd5e8b632c548bff($Cache, $Pile, $doublons, $Numrows, $SP) .
'</p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone fa-2x"></i>
        <p> +753153038</p>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave me a message</h3>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2016 John Doe. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="' .
find_in_path('js/jquery.1.11.1.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/bootstrap.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/SmoothScroll.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/easypiechart.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/jquery.prettyPhoto.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/jquery.isotope.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/jquery.counterup.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/waypoints.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/jqBootstrapValidation.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/contact_me.js') .
'"></script> 
<script type="text/javascript" src="' .
find_in_path('js/main.js') .
'"></script>');

	return analyse_resultat_skel('html_c3221cb01ae9c797bd5e8b632c548bff', $Cache, $page, 'squelettes/inc/contactsection.html');
}
?>