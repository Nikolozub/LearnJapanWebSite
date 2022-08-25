<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta charset="UTF-8"> 
  <title>Тексты</title>
  <link rel="stylesheet" href="/css/style.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="/js/script.js"></script>
 </head>

 <body>
 <?php include 'header.php';?>
 
  <h1 align="center">Тексты на янонском</h1>
  <p>Выберете текст: </p>
  
  <!-- Выводим список текстов -->
  <select name="textselect" id="textselect">
   <option selected disabled value=""></option>
   <option value="Rikitaro.txt">Рикитаро(力太郎)</option>
   <option value="Issunboshi.txt">Иссунбоси(一寸法師)</option>
   <option value="Sarutokani.txt">Обезьяна и краб(猿と蟹)</option>
   
   <?php
	//$dir    = '../texts';
	//$files = scandir($dir);
	//unset($files[0]);unset($files[1]);
	//foreach ($files as $file) {
	//	echo '<option value="' . pathinfo($file, PATHINFO_FILENAME) . '">' . pathinfo($file, PATHINFO_FILENAME) . '</option>';
	//}
   ?>
  </select>
  
  <pre class="japan_text" name="textcontent" id="textcontent">
  </pre>
 </body>
</html>