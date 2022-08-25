<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8">
  <title>Создание статьи</title>
  <link rel="stylesheet" href="/css/style.css">
 </head>
 
 <body>
 
  <?php include 'header.php';?>
  
  <?php
	if (isset($_POST['title']) and isset($_POST['content'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$namedb = '../sqlite.db';
		$db = new SQLite3($namedb);
		$results = $db->exec('insert into articles (title, content) values ("' . $title . '", "' . $content . '")');
		echo "Статья добавлена";
	}
	else {
		$title = "";
		$content = "";
	}
  ?>
   
   <form action='createarticle.php' method='POST'>
    <p><strong>Название статьи</strong></p>
	<p><input maxlength='100' size='40' value='<?=$title?>' name="title" required></p>
	<p><strong>Содержание</strong></p>
	<!-- <p><textarea  required><?=$content?></textarea></p> -->
	<div class="textwrapper"><textarea name="content" cols="2" rows="10"><?=$content?></textarea></div>
	<input type='submit' value='Создать статью'>
   </form>
  
 </body>
</html>