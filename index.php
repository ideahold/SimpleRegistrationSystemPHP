<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<title>Форма регистрации</title>
</head>
<body>
	<div class="container mt-4">
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<h1>Форма регистрации</h1>
		<form action="registration.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
			<button class="btn btn-success" type="submit">Отправить</button>
			<a href="sign-in.php">Уже зарегестрированы?</a>
		</form>
	<?php else:?>

		<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">сюда</a></p>
	<?php endif;?>
	</div>

</body>
</html>