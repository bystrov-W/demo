<?php
$pdo = new PDO($dsn, $userDB, $pass, $opt);
$model = new Model;

//добавление и изменение задачи
if (isset($_POST['add'])) {
	if (isset ($_POST['idForChanging']) && !empty ($_POST['idForChanging'])) {
		$model->changeTaskDescription ($pdo, $_POST['description'], $_POST['idForChanging']);
	} else {
		$model->addTask ($pdo, $_POST['description'], $_SESSION['userId']);
	}
}	

//Операции с задачей
if (isset($_GET['action'])) {
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if ($_GET['action'] == 'done') {
		$model->done($pdo, $id);
	} elseif ($_GET['action'] == 'delete') {
		$model->delete($pdo, $id);
	} elseif ($_GET['action'] == 'change') {
		$model->change($pdo, $id);
		$idForChanging = isset($_GET['id']) ? $_GET['id'] : '';
	} 
}

//Назначение ответственного
if (isset($_POST['assignUser'])) {
	$model->assignUser($pdo, $_POST['assignUser'],$_POST['idForChanging']);
}
	
//список задач
if (isset($_POST['sortOption'])) {
	if ($_POST['sortOption'] == '1') {
		$sortStyle = 'ORDER BY description ASC';
	} else if ($_POST['sortOption'] == '2') {
		$sortStyle = 'ORDER BY is_done ASC';
	} else if ($_POST['sortOption'] == '3') {
		$sortStyle = 'ORDER BY date_added ASC';
	}
}
$listOfTasks = $model->listOfTasksWithSort ($pdo, $_SESSION['userId'],$sortStyle);
$listOfTasksForUser = $model->listOfTasksWithSortForUser ($pdo, $_SESSION['userId'],$sortStyle);
	
//список пользователей
$listOfUsers = $model->allMembers($pdo);

//Регистрация
if (isset($_POST['registration']) && empty($_SESSION['user'])) {
	$message = $model->register ($pdo, $_POST['login'],$_POST['password']);
} elseif (!empty($_SESSION['user'])) {
	$message = 'Вы авторизованы';
}

//Авторизация
if (isset($_POST['authorization']) && empty($_SESSION['user'])) {
	$message = $model->login ($pdo, $_POST['login'],$_POST['password']);
} elseif (!empty($_SESSION['user'])) {
	$message = 'Вы авторизованы';
}

//Выход/смена пользователя
if (isset($_GET['exit'])) {
	$model->logout ($pdo);
}

//Редиректы
//если не авторизован
if (empty($_SESSION['user']) && $_SERVER['REQUEST_URI'] == '/5.2/index.php' OR empty($_SESSION['user']) && $_SERVER['REQUEST_URI'] == '/5.2/') {
	header( 'Location: login.php' );
}

//если авторизован
if (!empty($_SESSION['user']) && $_SERVER['REQUEST_URI'] == '/5.2/login.php') {
	header( 'Location: index.php' );
}