<?php
header("Content-Type: text/html; charset=utf-8");
session_start();
?>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>ProjectSoft</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <header>
        <nav class="navigation">
          <ul class="topmenu">
            <li><a href="index.php">Главная</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="">Категории</a>
              <ul class="submenu">
                <li><a href="">Антивирусы</a></li>
                <li><a href="">Защита паролей</a></li>
                <li><a href="">Операционные системы</a></li>
                <li><a href="">Графические редакторы</a></li>
                <li><a href="">Видеоредакторы</a></li>
                <li><a href="">Интернет и сети</a></li>
                <li><a href="">Офисные пакеты</a></li>
		<li><a href="">Утилиты</a></li>
              </ul>
            </li>
            <li><a href="">Производители</a>
              <ul class="submenu">
                <li><a href="">Microsoft</a></li>
                <li><a href="">Kaspersky Lab</a></li>
                <li><a href="">Adguard</a></li>
                <li><a href="">SkyDNS</a></li>
		<li><a href="">Apple</a></li>
		<li><a href="">Oracle</a></li>
              </ul>
            </li>
            <li><a href="">Контакты</a></li>
			<li><a href="">Вход</a>
			  <form action="testreg.php" method="post" class="reg">
                           <input name="login" type="text" placeholder="Логин">
		           <input name="password" type="text" placeholder="Пароль">
                           <button type="submit" name="sumbit">Войти</button>
				<?php
					if (empty($_SESSION['login']) or empty($_SESSION['id']))
					{ echo "<a href=''>Вы вошли на сайт, как гость</a>"; }
					else
					{ echo "<a href=''>Вы вошли на сайт, как: ".$_SESSION['login']."</a>"; }
				?>
                          </form>
			</li>
			<li><a href="">Регистрация</a>
			  <form action="save_user.php" method="post" class="reg">
			    <input name="login" type="text" placeholder="Логин">
		            <input name="password" type="text" placeholder="Пароль">
			    <input name="email" type="text" placeholder="Email">
                            <button type="submit" name="sumbit">Зарегистрироваться</button>
			  </form>
			</li>
		  </ul>
        </nav>
	 <form class="search" method="post" action="search.php">
          <input type="search" name="query"  placeholder="Искать здесь...">
          <button type="submit" name="sumbit"></button>
         </form>
    </header>

    <main>
