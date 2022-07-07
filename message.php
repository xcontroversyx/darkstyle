<!DOCTYPE html>
<html>
<head>
    <title>Магазин цветов «Адель»</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
</head>
<body>
<div id="container">
	<div id="header">
	<h1><b>Магазин цветов «Адель»</b></h1>
	</div>
		 

	<div id="navigation">
  <nav><a href="index.html">Главная</a> | <a href="price.html">Прайс-лист</a> |
       <a href="sale.html">Акции</a> | <a href="contacts.html">Контакты</a> | <a href="feedback.html">Обратная связь</a></nav>
	</div>
	
 
	<div id="sidebar">
	<h2>Наш ассортимент</h2>
<img src="6.jpg" alt="" width="250" height="150">
<p></p>
  <nav><a href="gypsophila.html">Гипсофилы</a> | <a href="roses.html">Розы</a> |
       <a href="peony.html">Пионы</a> | <a href="orchidaceae.html">Орхидеи</a> | <a href="hyacinth.html">Гиацинты</a> | <a href="hydrangea.html">Гортензии</a></nav>
<p></p>
<img src="7.jpg" alt="" width="250" height="150">
	</div>
		 
	<div id="content">
	<h2>Отправка сообщения</h2>
<?php
header('Content-Type: text/html; charset=utf-8');
$name = $_POST['name'];
$email = $_POST['email'];
$yourmessage = $_POST['yourmessage'];
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$yourmessage = htmlspecialchars($yourmessage);
$name = urldecode($name);
$email = urldecode($email);
$yourmessage = urldecode($yourmessage);
$name = trim($name);
$email = trim($email);
$yourmessage = trim($yourmessage);

if (mail("alpinevika@mail.ru", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email. "Сообщение:" .$yourmessage."From: info@victoriafisher.ru \r\n);"))
 {     echo "Сообщение успешно отправлено!";
} else {
    echo "К сожалению, сообщение не было отправлено из-за ошибок.";
}
?>
<p>Вы будете возвращены на главную страницу через 3 секунды...</p>
<img src="25.jpg" alt="" width="300" height="250">
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://victoriafisher.ru/index.html");}
window.setTimeout("changeurl();",4000);
</script>
	</div>
		 
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	<p>Магазин цветов «Адель». Все права защищены.</p>
	</div>
</div>
</body>
</html>
