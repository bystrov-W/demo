<?php
require ('init.php');
require ('vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('templates');

$twig = new Twig_Environment($loader, array(
	'cache' => 'cache', 'auto_reload' => true
));
	
$twig->addGlobal('session', $_SESSION);

$template = $twig->loadTemplate('header.tmpl');
echo $template->render(array(
	'pageTitle' => 'Главная'
));