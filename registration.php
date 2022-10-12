<?php
	$login = filter_var(trim($_POST['login']), 
	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), 
	FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), 
	FILTER_SANITIZE_STRING);

	if (mb_strlen($login) < 5 || mb_strlen($login) > 100) {
		echo "Недопустимая длина логина!";
		exit();
	} else if (mb_strlen($pass) < 5 || mb_strlen($pass) > 40) {
		echo "Недопустимая длина пароля!";
		exit();
	}

	function generateRandomString($length = 10) {

    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    	$charactersLength = strlen($characters);

    	$randomString = '';

    	for ($i = 0; $i < $length; $i++) {
        	$randomString .= $characters[rand(0, $charactersLength - 1)];
    	}
    	return $randomString;
	}

	$salt = generateRandomString();

	$pass = md5($pass.$salt);

	$mysql = new mysqli(
		'localhost', 
		'root', 
		'root', 
		'test_site'
	);

	$q = "INSERT INTO `users` (`name`, `login`, `hash`, `salt`) VALUES ('$name', '$login', '$pass', '$salt')";

	if (mysqli_query($mysql, $q)) {
    	echo "New record created successfully";
	} else {
    	echo "Error: ".$q."<br>".mysqli_error($mysql);
	}
	mysqli_close($mysql);

	setcookie('user', $_POST['name'], time() + 3600, "/");

	header('Location: /success.php');
?>
