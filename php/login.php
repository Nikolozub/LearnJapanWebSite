<?php
	session_start();
?>

<!doctype html>
<html>

 <head>
  <meta charset="utf-8">
  <title>Вход</title>
  <link rel="stylesheet" href="/css/style.css">
 </head>

 <body>

  <?php include 'header.php';?>
  
  <?php
	$namedb = '../sqlite.db';
	$message = '';
	
	if (isset($_POST['login']) and isset($_POST['password'])) {
		$login = $_POST['login'];
		$password = $_POST['password'];
		$db = new SQLite3($namedb);
		$results = $db->query('SELECT login, password FROM users;');
		$find_login = false;
		
		while (!$find_login and $row = $results->fetchArray()) {
			if ($login == $row['login']){
				$find_login = true;
				if ($password == $row['password']){
					$message = "Вы вошли как пользователь " . $login;
					$_SESSION['login'] = $login;
				}
				else {
					$message = "Неверный пароль!";
				}
			}
		}
		if (!$find_login) {
			$message = "Пользователя " . $login . " не существует!";
		}
	}
	else
	{
		
	}
  ?>
  
  <div class="authorization_form">
   <h1>Вход</h1>
   <p><?=$message?></p>
   <form action='login.php' method='POST'>
    <p>Введите логин</p><input name='login' class="f" required><br>
	<p>Введите пароль</p><input name='password' type='password' class="f" required><br><br>
    <input type='submit' value='Войти'>
   </form>
   <p></p>
   <form action="register.php">
    <button>Регистрация</button>
   </form>   
  </div>
  
</body>
</html>
