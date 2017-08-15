<?php
class Model {

	//register
	public function register ($pdo, $user, $password)
	{
		if (empty($user)) {
			return 'Введите логин';
		} else if (empty($password)) {
			return 'Введите пароль';
		} else {
			$action = $pdo->prepare("SELECT login FROM user WHERE login = ?");
			$action->bindValue(1, $user, PDO::PARAM_STR);
			$action->execute();
			$row = $action->fetchAll();
			if ($row == true) {
				return 'Логин занят';
			} else {
				$add = $pdo->prepare('INSERT INTO user (login, password) VALUES (?, ?)');
				$add->bindParam(1, $user, PDO::PARAM_STR);
				$add->bindParam(2, $password, PDO::PARAM_STR);
				$add->execute();
				return 'Вы успешно зарегистрированы. Теперь авторизируйтесь со своими данными.';
			}
		}
	}
		
	//авторизация
	public function login ($pdo, $user, $password)
	{
		if (empty($user)) {
			return 'Введите логин';
		} else if (empty($password)) {
			return 'Введите пароль';
		} else {
			/* $action = $pdo->query("SELECT id, login, password FROM user WHERE login = '$user'");*/
			$action = $pdo->prepare("SELECT id, login, password FROM user WHERE login = ?");
			$action->bindValue(1, $user, PDO::PARAM_STR);
			$action->execute();
			$row = $action->fetchAll();
			if ($row[0]['login'] == $user && $row[0]['password'] == $password) {
				$_SESSION ['user'] = $row[0]['login'];
				$_SESSION ['userId'] = $row[0]['id'];
				return 'Вы авторизованы';
				header( 'Location: index.php' ); 
			} else {
				return 'Данные не совпадают';
			}
		}
	}

	//Выход/смена пользователя
	public function logout ($pdo)
	{
		unset ($_SESSION['user']);
		unset ($_SESSION['userId']);
		header( 'Location: login.php' ); 
	}
		
	//Список задач с сортировкой
	public function listOfTasksWithSort ($pdo, $user,$sortStyle)
	{
		$sortStyleOrder = isset($sortStyle) ? $sortStyle : '';
		$query = $pdo->prepare("SELECT id, user_id, assigned_user_id, description, is_done, date_added FROM task WHERE user_id = ? $sortStyle");
		$query->bindValue(1, $user, PDO::PARAM_STR);
		$query->execute();
		return $query->fetchAll();
	}
		
	//Список задач для пользователя
	public function listOfTasksWithSortForUser ($pdo, $user,$sortStyle)
	{
		$sortStyleOrder = isset($sortStyle) ? $sortStyle : '';
			$query = $pdo->prepare("SELECT id, user_id, assigned_user_id, description, is_done, date_added FROM task WHERE assigned_user_id = ? $sortStyle");
			$query->bindValue(1, $user, PDO::PARAM_STR);
			$query->execute(array($user));
			return $query->fetchAll(); 
	}
		
	//Список пользователей
	public function allMembers ($pdo)
	{
		$stmt = $pdo->query("SELECT id, login FROM user");
		$listOfUsers = array ();
		$n = 0;
		while ($row = $stmt->fetch()) {
			$listOfUsers[$n]['login'] = $row['login'];
			$listOfUsers[$n]['id'] = $row['id'];
			$n++;
		}
		return $listOfUsers;
	}
			
	//Добавление задачи
	public function addTask ($pdo, $description, $userId)
	{
		$userMaster = $userId;
		$descriptionOfTask = isset($description) ? $description : '';
		$date = date('Y/m/d H:i:s');
		$isDone = 0;
		$add = $pdo->prepare('INSERT INTO task (user_id, description, is_done, date_added) VALUES (?, ?, ?, ?)');
		$add->bindParam(1, $userMaster, PDO::PARAM_STR);
		$add->bindParam(2, $descriptionOfTask, PDO::PARAM_STR);
		$add->bindParam(3, $isDone, PDO::PARAM_INT);
		$add->bindParam(4, $date, PDO::PARAM_STR);
		$add->execute();
	}
		
	//Изменение описания задачи
	public function changeTaskDescription ($pdo, $description, $idForChanging)
	{
		$descriptionOfTask = isset($description) ? $description : '';
		$idForChangingOfTask = isset($idForChanging) ? $idForChanging : '';
		$action = $pdo->prepare('UPDATE task SET description = ? WHERE id = ?');
		$action->bindParam(1, $description, PDO::PARAM_STR);
		$action->bindParam(2, $idForChanging, PDO::PARAM_STR);
		$action->execute();
	}
		
	//Выбор задачи для изменения описания
	public function change($pdo, $id)
	{
		if (!empty($id)) {
			$action = $pdo->prepare('SELECT description FROM task WHERE id = ?');
			$action->bindValue (1, $id, PDO::PARAM_INT);
			$action->execute();
			while ($row = $action->fetch()) {
				return $value = $row['description'];
			}
		}
	}
		
	//Завершение задачи
	public function done($pdo, $id)
	{
		$action = $pdo->prepare('UPDATE task SET is_done = 1 WHERE id = ?');
		$action->execute(array($id));
	}

	//Удаление задачи
	public function delete($pdo, $id)
	{
		$action = $pdo->prepare('DELETE from task WHERE id = ?');
		$action->execute(array($id));
	}
		
	//Назначение ответственного
	public function assignUser ($pdo, $user, $taskId)
	{
		$action = $pdo->prepare("UPDATE task SET assigned_user_id=? WHERE id = ?");
		$action->execute(array($user,$taskId));	
	}
}