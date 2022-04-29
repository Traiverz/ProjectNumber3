<?php
// Скрипт проверки

// Соединямся с БД
$link=mysqli_connect("localhost", "root", "root", "testtable");

$query = mysqli_query($link, "SELECT *,INET_NTOA(user_ip) AS user_ip FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
$userdata = mysqli_fetch_assoc($query);

    if ($userdata['choise'] == 'Desert') {
		header('Location: portal-egypt.html');
	} else {
		if ($userdata['choise'] == 'Forest'){
			header('Location: portal-forest.html');
		}
		 else {
		if ($userdata['choise'] == 'Volcano'){
			header('Location: portal-volcano.html');
		}
			 else {
		if ($userdata['choise'] == 'Japan'){
			header('Location: portal-japan.html');
			}
		}
		}
	}
	
?>