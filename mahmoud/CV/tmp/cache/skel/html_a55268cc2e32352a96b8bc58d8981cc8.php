<?php

/*
 * Squelette : squelettes/inc/profoliosection.html
 * Date :      Wed, 07 Mar 2018 00:52:27 GMT
 * Compile :   Wed, 07 Mar 2018 13:03:08 GMT
 * Boucles :   
 */ 
//
// Fonction principale du squelette squelettes/inc/profoliosection.html
// Temps de compilation total: 6.000 ms
//

function html_a55268cc2e32352a96b8bc58d8981cc8($Cache, $Pile, $doublons = array(), $Numrows = array(), $SP = 0) {

	if (isset($Pile[0]["doublons"]) AND is_array($Pile[0]["doublons"]))
		$doublons = nettoyer_env_doublons($Pile[0]["doublons"]);

	$connect = '';
	$page = (
'<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Portfeuille:</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Web Design</a></li>
            <li><a href="#" data-filter=".app">App Development</a></li>
            <li><a href="#" data-filter=".branding">Branding</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/01-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="' .
find_in_path('img/portfolio/01-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/02-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small> </div>
              <img src="' .
find_in_path('img/portfolio/02-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/03-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="' .
find_in_path('img/portfolio/03-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/04-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="' .
find_in_path('img/portfolio/04-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/05-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small> </div>
              <img src="' .
find_in_path('img/portfolio/05-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/06-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small> </div>
              <img src="' .
find_in_path('img/portfolio/06-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/07-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development, Branding</small> </div>
              <img src="' .
find_in_path('img/portfolio/07-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="' .
find_in_path('img/portfolio/08-large.jpg') .
'" title="Project description" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small> </div>
              <img src="' .
find_in_path('img/portfolio/08-small.jpg') .
'" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>');

	return analyse_resultat_skel('html_a55268cc2e32352a96b8bc58d8981cc8', $Cache, $page, 'squelettes/inc/profoliosection.html');
}
?>