<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<title>Успешно</title>
</head>
<body>
	<div class="container mt-4">
		<?php?>
			<p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">сюда</a></p>
		<??>
	</div>
</body>
</html>
