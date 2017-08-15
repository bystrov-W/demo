<?php
require ('header.php');
$template = $twig->loadTemplate('login.tmpl');
echo $template->render(array(
	'message' => $message
));