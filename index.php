<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
require 'includes/config.php' ;
// Laad de Smarty bibliotheek in
require_once 'libs/smarty/Smarty.class.php';
// Voer instellingen uit en stel template parser in
require 'includes/bootstrap.php' ;
// Maak de database connectie
require_once 'includes/database.php' ;

// Koppel de waarde van de paginatitel aan te smarty tag 'title'
$templateParser->assign('title', 'Three Days Grace');
// Toon de template: output html
$templateParser->display('head.tpl');

$page = (empty($_GET['page'])) ? '' : $_GET['page'];

$templateParser->display('header.tpl');

switch($page){
	case'home':
		require 'logic/select_newsarticles.php';
		$templateParser->assign('data', $result);
		$templateParser->display('home.tpl');
	break;
	case'news':
		require 'logic/select_newsarticles.php';
		$templateParser->assign('data', $result);
		$templateParser->display('views/newsarticles.tpl') ;
	break;
	default:
		$templateParser->display('home.tpl');
	break;
}


require 'logic/select_newsarticles.php';


$templateParser->display('footer.tpl');

// Haal de nieuws artikelen op
// Toon de nieuwsberichten. Oude stijl:
// Bouw dit om naar een template systeem

