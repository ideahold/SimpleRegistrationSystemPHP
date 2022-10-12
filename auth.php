<?php
	$mysql = new mysqli(
		'localhost', 
		'root', 
		'root', 
		'test_site'
	);
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), 
	FILTER_SANITIZE_STRING);

	$q = "SELECT * FROM `users` WHERE `login` = '$login'";

	if (mysqli_query($mysql, $q)) {
		$result = mysqli_query($mysql, $q);
		$user = $result->fetch_assoc();
		if (count($user) == 0) {
			echo 'Такого логина в системе нет! <a href="sign-in.php">Повторить</a>';
		}
		else {
			$salt = $user['salt'];
			$pass = md5($pass.$salt);
		}
	}
	
	

	
	$q = "SELECT * FROM `users` WHERE `login` = '$login' AND `hash` = '$pass'";

	if (mysqli_query($mysql, $q)) {
		$result = mysqli_query($mysql, $q);
		$user = $result->fetch_assoc();
		if (count($user) == 0){
			echo 'Такой пользователь не найден! <a href="sign-in.php">Повторить</a>';
			exit();
		}

		setcookie('user', $user['name'], time() + 3600, "/");

    	echo "New record created successfully";
	} else {
    	echo "Error: ".$q."<br>".mysqli_error($mysql);
	}
	mysqli_close($mysql);

	header('Location: /');

?>