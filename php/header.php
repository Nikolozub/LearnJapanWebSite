  <header class="main_header">
  </header>
     <nav style="">
    <ul class="main_menu">
     <li><a href="/index.php">Домой</a></li>
     <li><a href="/php/articles.php">Статьи</a></li>
     <li><a href="/php/texts.php">Тексты на японском</a></li>
     <li><a href="/php/literature.php">Литература</a></li>
     <li><a href="/php/login.php">Вход</a></li>
	 <li>
	  <?php 
		if (isset($_SESSION['login'])) {
			echo "Вы - " . $_SESSION['login'];
		}
		else {
			echo "Вы не вошли в систему";
		}
	  ?>
	 </li>
	 
    </ul>
   </nav>