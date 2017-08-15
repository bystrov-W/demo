<?php
require ('header.php');
$template = $twig->loadTemplate('index.tmpl');
echo $template->render(array(
	'action' => $_GET['action'],
	'pdo' => $pdo,
	'id' => $id,
	'rows' => $listOfTasks,
	'rows2' => $listOfTasksForUser,
	'change' => $model->change ($pdo,$id),
	'listOfUsers' => $listOfUsers,
	'idForChanging' => $idForChanging
));