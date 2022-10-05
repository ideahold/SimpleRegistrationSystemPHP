<?php
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), 
	FILTER_SANITIZE_STRING);

	$salt = '12345';
	$pass = md5($pass.$salt);

	$mysql = new mysqli(
		'localhost', 
		'root', 
		'root', 
		'test_site'
	);

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