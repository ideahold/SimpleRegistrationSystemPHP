<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<title>Форма входа</title>
</head>
<body>
	<div class="container mt-4">
		<h1>Форма входа</h1>
		<form action="auth.php" method="post">
			<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
			<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
			<button class="btn btn-success" type="submit">Войти</button>
			<a href="index.php">Зарегестрироваться!</a>
		</form>	
	</div>
</body>
</html>