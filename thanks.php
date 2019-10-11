<!--ОТРЕДАКТИРОВАННЫЙ ТЕКСТ! ВНИМАНИЕ! ВНИМАНИЕ!-->
<?php 
//	Action file 14.01.2019
//	Template Name: Страница благодарности
	
//	Проверка формы
//	====================
	if((!$_POST)||($_POST['e-mail'])) {	
		header('Location: /404');
		exit();
	}else{	
//	Если нет, то начинаем работать с формой, предварительно проверив поле с капчей, снегерированной JS
	//}elseif (!empty($_REQUEST["captcha"]) && $_REQUEST["captcha"] == md5(date("Y-m-d"))) {
	
	
//	Обработчик формы
//	====================

//	Присваиваем универсальные переменные
	$time 	= $_POST['time'];
	$utm 	= $_POST['utm'];
	$formid 	= $_POST['formid'];
	$title	 	= $_POST['title'];
	$answers	 	= $_POST['answers'];
	$textarea	 	= $_POST['textarea'];
	$ip 		= $_SERVER[REMOTE_ADDR];
	$domen 		= parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
	$url 		= $_SERVER[HTTP_REFERER];
	$domen_url 		= $_SERVER[HTTP_HOST];
	$user 		= $_SERVER[HTTP_USER_AGENT];
	
// Присваиваем уникальные переменные
	$name 		= $_POST['name1'];
	$phone 		= $_POST['phone'];
	$email 		= $_POST['email'];
	$textarea 	= $_POST['textarea']; 
	$site	 	= $_POST['site']; 
	$services 	= $_POST['services']; 
	$attachment = $_POST['attachment']; 

// Тема письма
	$subject = 'Заявка / '.$phone;

// Отправитель
	$from = "Landing СМАРТ ВИП";
	$from_email = 'info@'.$domen;

// Получатель
	$to = "info@smart-sps.ru";

// Заголовок
	$headers  = "From:".$from."<".$from_email.">\r\n"; 
	$headers .= "Reply-To: ".$from_email."\r\n";
	$headers .= "Bcc: info@kp16.ru\r\n"; 
	$headers .= "Content-type: text/html; charset=utf-8 \r\n"; 

// Создаем сообщение
					$mess = '<h3>Контактная информация:</h3>';
					$mess .='<b>ID:</b> '.$orderID.'<br>';
	if ($name) 		$mess .='<b>Имя:</b> '.$name.'<br>';
	if ($phone) 	$mess .='<b>Тел:</b> '.$phone.'<br>';
	if ($email) 	$mess .='<b>Email:</b> '.$email.'<br>';
	if ($date) 		$mess .='<b>Дата:</b> '.$date.'<br>';
	if ($time) 		$mess .='<b>Время:</b> '.$time.'<br>';

					$mess .='<h3>Общая информация:</h3>';
	if ($utm) 		$mess .='<b>UTM:</b> <br>'.$utm.'<br>';
	if ($domen) 	$mess .='<b>Домен:</b> <a href="'.$domen_url.'">'.$domen.'</a><br>';
	if ($title) 	$mess .='<b>Страница:</b> <a href="'.$url.'">'.$title.'</a><br>';
	if ($formid) 	$mess .='<b>Форма:</b> '.$formid.'<br><br>';
	if ($ip) 		$mess .='<b>IP адрес:</b> '.$ip.'<br>';
	if ($user) 		$mess .='<b>Детали:</b> '.$user.' Со вкусом кубики!!!<br>';

// Функция отправки
	mail($to, $subject, $mess, $headers);
	
//	Дизайн страницы благодарности
//	====================
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Контрактное производство электроники - СМАРТ ВИП</title>
    <meta name="description" content="Контрактное производство, монтаж и проведение испытаний электроники">

    <link rel="shortcut icon" href="i/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="i/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="i/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="i/favicon/apple-touch-icon-114x114.png">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap">
    <link rel="stylesheet" href="http://smart-sps-promo.ru/css/libs.min.css">
    <link rel="stylesheet" href="http://smart-sps-promo.ru/css/main.css">
	
    <script src="http://smart-sps-promo.ru/js/libs.min.js"></script>
    <script src="http://smart-sps-promo.ru/js/common.js"></script>

</head>

<body>

	<section id="thank">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-8">
					<h1>
						<span class="header fz45 ff__ror">
							Спасибо за заявку
						</span>
					</h1>
					<div class="intro fz24">
						Ваша заявка успешно отправлена. Мы свяжемся с вами в самое ближайшее время
					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>
<?php 
	}
?>
