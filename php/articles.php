<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <title>Статьи</title>
  <link rel="stylesheet" href="/css/style.css">
  <style>
   a {
    text-decoration: none; /* Убираем подчёркивание */
   }
  </style>
 </head>
 
 <body>
 
  <?php include 'header.php';?>
 
  <h2>Содержание</h2>
  
  <ul class="plain_text">
  <?php
    $namedb = '../sqlite.db';
	$db = new SQLite3($namedb);
	$results = $db->query('SELECT id, title FROM articles;');
	while ($row = $results->fetchArray()) {
		echo "<li><a href='content.php?id=" . $row['id'] . "'>" . $row['title'] ."</a></li>";
	}
  ?>
  </ul>
  
  <?php
	// для администратора добавляется возможность создания статей
	if (isset($_SESSION['login']) and $_SESSION['login'] == 'admin') {
		echo "<br><a href=createarticle.php>Добавить статью</a>";
	}
  ?>

 </body>
</html>