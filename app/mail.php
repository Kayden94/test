<?php 



//checking
$status=$_GET["status"];
$statusP=$_POST["statusP"];


if ($statusP=="send") {


	if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['text'])&&$_POST['text']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
		$name=$_POST["name"];
		$text=$_POST["text"];
		$tel=$_POST["tel"];

		$to = 'ner.braim@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Загаловок сообщения

        $message = '
        <html>
        <head>
        	<title>'.$subject.'</title>
        </head>
        <body>
        	<p>Имя: '.$name.'</p>
        	<br/>
        	<p>Телефон: '.$tel.'</p>
        	<br/>
        	<p>Текст: '.$text.'</p>                        
        </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя

 		mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
 	}

	
 }


 ?>