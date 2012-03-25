<?php 
include "libmail.php"; // вставляем файл с классом
mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
/* выбрать базу данных. Если произойдет ошибка - вывести ее */ 
mysql_select_db("SLDauct") or die(mysql_error());
$login = $_POST["login"];
$firstname = $_POST["firstname"];
$secondname = $_POST["secondname"];
$password = $_POST["password"];
$password2 =$_POST["password2"];
$email = $_POST["email"];
$address = $_POST["address"];
$date = getdate();
$date = $date["year"].'-'.$date["mon"].'-'.$date["mday"];
$regkey = "123";
$query = "select * from users where username = '".mysql_escape_string($login)."'";
$match = mysql_query($query);
$count= 0;
while($myrow = mysql_fetch_array ($match)) 
  { 
  	$count++;
  }
  if ($count != 0) die("Login already taken");
elseif ($password !== $password2) die("Пароли не совпадают");
$query = "INSERT INTO users VALUES(NULL,'$login','$firstname','$secondname','$regkey','$date',NULL,'$password','$email','$address')"; 

$m= new Mail; // начинаем 
$m->From( "sergey.parahin@gmail.com" ); // от кого отправляется почта 
$m->To( "vladimir.sinkov@gmail.com" ); // кому адресованно
$m->Subject( "Тема сообщения" );
$m->Body( "я тайно тебя люблю" );    
//$m->Bcc( "bcopy@asd.com"); // скрытая копия отправится по этому адресу
$m->Priority(3) ;    // приоритет письма
//$m->Attach( "asd.gif","", "image/gif" ) ; // прикрепленный файл 
$m->smtp_on( "relay.jangosmtp.net", "SLDauctAdmin", "544710JJ",587) ; // если указана эта команда, отправка пойдет через SMTP 
$m->Send();    // а теперь пошла отправка

echo "Показывает исходный текст письма:<br><pre>", $m->Get(), "</pre>";
/* Выполнить запрос. Если произойдет ошибка - вывести ее. */ 
mysql_query($query) or die(mysql_error()); mysql_close();
?>