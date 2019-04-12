<?php 

	// variable declaration
	$username = "";
	$errors = array(); 
	$_SESSION['success'] = "";


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = $_POST['username'];
		$password_1 = $_POST['password_1'];
		$password_2 = $_POST['password_2'];

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Entrez votre pseudo"); }
		if (empty($password_1)) { array_push($errors, "Mot de passe requis"); }
		
		$query = $db->prepare("SELECT id FROM users WHERE username = :username");
		$query->execute(
			[
				"username" => $username,
			]
		);
		$verify = $query->fetch();
		if (!empty($verify->id)) 
		{
			array_push($errors, "Ce pseudo est déjà pris");
		}

		if ($password_1 != $password_2) 
		{
			array_push($errors, "Entrez deux mots de passe identiques");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);
			//encrypt the password before saving in the database
			
			$query= $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
			$data = $query->execute(
				[
				"username" =>  $username,
				"password" =>  $password,
				]
			);

			$_SESSION['user'] = $username;
			
		}
	}

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username)) {
			array_push($errors, "Un pseudo est requis");
		}
		if (empty($password)) {
			array_push($errors, "Un mot de passe est requis");
		}

		if (count($errors) == 0) {
			$password = md5($password);

			$query = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    
			$query->execute(
				[
				"username" => $username,
				"password" => $password,
				]
			);

			$data = $query->fetch();
			

			if ($data) {
				$_SESSION['user'] = $username;
			}else {
				array_push($errors, "Pseudo et/ou mot de passe incorrect(s)");
			}
		}
	}

	// Log out
	if (isset($_POST['logout'])) 
	{
		unset($_SESSION['user']);
		unset($_SESSION['logout']);
	}

	// Delete Account
	if (isset($_POST['deleteAccount'])) 
	{	
		$userToDelete = $_SESSION['user'];
		$query = $db->prepare("DELETE FROM users WHERE username = :username");
		$data = $query->execute(
			[
				"username" =>	$userToDelete
			]
		);
		$query2 = $db->prepare("DELETE FROM friends WHERE (username_1 = :username) or (username_2 = :username) ");
		$data = $query2->execute(
			[
				"username" =>	$userToDelete
			]
		);
		unset($_SESSION['user']);
		unset($_POST['deleteAccount']);
	}

	// Save Score
	if (isset($_GET['xfpp']))
	{
		include '../controllers/profil.php';
		$previousScore = $profil_data->score;
		$newScore = $previousScore + $_GET['xfpp']/2;
		$idScore = $profil_data->id;

		$query = $db->prepare("UPDATE users SET score = :score WHERE id = :id");
		$data = $query->execute(
			[
			"score" =>	$newScore,
			"id" =>	$idScore
			]
		);
		if (isset($switch) and $switch == 1) {
			$query2 = $db->prepare("INSERT INTO events(username, score, date) VALUES (:username, :score, :date)");
			$data = $query2->execute(
				[
				"username" =>	$_SESSION['user'],
				"score" =>	$_GET['xfpp'],
				"date" =>	date("d,m,y")
				]
			);
			$switch = 0;
		}
		else {
			$switch = 1;
		}
		if (isset($_SESSION['noMoreAnimation'])) 
		{
			unset($_SESSION['noMoreAnimation']);
		}
	}

?>