<?php
	session_start();
	$page_title = '';
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$namedb = '../sqlite.db';
		$db = new SQLite3($namedb);
		$results = $db->query('select title, content from articles where id =' . $id);
		$article = $results->fetchArray();
		$page_title = $article['title'];
	}
?>

<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <title><?=$page_title?></title>
  <link rel="stylesheet" href="/css/style.css">
 </head>
 
 <body>
 
  <?php include 'header.php';?>
  
  <?php
	if (isset($article['title']) and isset($article['content'])) {
		echo "<h2 align='center'>" . $article['title'] . "</h2>";
		echo "<p><pre class='plain_text' style='white-space: pre-line;'>" . $article['content'] . "</pre></p>";
	}
	else {
		echo "Ошибка";
	}

  ?>
  
 </body>
</html>