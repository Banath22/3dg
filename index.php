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

// Haal de nieuws artikelen op
require 'logic/select_newsarticles.php';
// Toon de nieuwsberichten. Oude stijl:
// Bouw dit om naar een template systeem
$templateParser->assign('data', $result);

$templateParser->display('views/newsarticles.tpl') ;

