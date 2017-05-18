<?php
header("Content-Type: text/html; charset=utf-8");
/*Обработка поискового запроса*/
function search ($query) { 
$query = strip_tags($query);               // Удаляем HTML и PHP теги
$query = mysql_real_escape_string($query); // Экранируем специальные символы

	
//Поисковый запрос не пустой?
if (!empty($query)){
  if (strlen($query) < 1) {
    echo '<p>короткий поисковый запрос.</p>';}
  else if (strlen($query) > 128) {
    echo '<p>длинный поисковый запрос.</p>';}
	else {
		$result = mysql_query("SELECT id,title,description,sys_requir FROM programm WHERE description LIKE '%$query%' OR title LIKE '%$query%'");
		//Определим колличество найденных совпадений
		$num = mysql_num_rows($result);
		//Если число совпадений (строк результата запроса) больше 0 
		if ( $num > 0) { 
			//Получаем ассоциативный массив
			$row = mysql_fetch_assoc($result); 
			//и начинаем формировать строку поисковой выдачи
			echo '<p>По вашему запросу  <strong>'.$query.'</strong> найдено '.$num.' совпадений</p>' ;
			do {
				//Продолжаем  формировать строку поисковой выдачи
				echo '<p><a href="programm.php?id='.$row['id'].'">'.$row['title'].'</a></p><p>'.$row['description'].'</p><p>'.$row['sys_requir'].'</p>';
				// Делаем это пока у нас есть результаты
				} 
			while ($row = mysql_fetch_assoc($result)); 
		} 
		else {
			echo '<p>По вашему запросу ничего не найдено.</p>'; 
		}
		} 
	}
else {
  echo '<p>Задан пустой поисковый запрос.</p>';
}
echo "<a href='index.php'>Главная страница</a>";
}

if (isset ($_POST['query'])){ 
  include ("bd.php");
  $search_result = search ($_POST['query']); 
  echo $search_result;
  mysql_close($db);
}
?>