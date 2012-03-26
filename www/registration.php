<?php 
	include "lib/libmail.php";

	mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
	mysql_select_db("SLDauct") or die(mysql_error());

	/*
		======================================================
		FILLING DATABASE FIELDS
		======================================================
	
	*/
	$login = $_POST["login"];
	$firstname = $_POST["firstname"];
	$secondname = $_POST["secondname"];
	$password = $_POST["password"];
	$repeat_password =$_POST["password2"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$date = getdate();
	$date = $date["year"].'-'.$date["mon"].'-'.$date["mday"];
	$regkey = "123";

	// check that user with that username is not exist
	$query = "select * from users where username = '".mysql_escape_string($login)."'";
	$match = mysql_query($query);
	$count = 0;
	while($myrow = mysql_fetch_array ($match)) 					/*Cheking for login match in database*/
  	{ 
  		$count++;
  	}
  	if ($count != 0) 
  		die("Login already taken");
	elseif ($password !== $repeat_password) 
		die("Пароли не совпадают");
	
	// insert data of new user
	$query = "INSERT INTO users VALUES(NULL,'$login', '$firstname', '$secondname', '$regkey', '$date', NULL, '$password', '$email', '$address')"; //NULL FIELDS : 1)ID(autofilled :counter)
	mysql_query($query) or die(mysql_error()); mysql_close();																					  // 			  2)Confirmation date(filled on	
																																				  //			  mail delivery)
     //======================================================
	header('Location:index.php');
echo "You have successfully registered , now you will be redirected to the main page. wait please"; 
	/*
		======================================================
		SEND MAIL 
		======================================================
	
	*/
		
	$m= new Mail; 
	$m->From( "sldauct@gmail.com" ); 
	$m->To( $email ); 
	$m->Subject( "Registration confirmation" );
	$m->Body( "Greetings ".$firstname.",we welcome you at SLDauct , we hope that you will enjoy our auction .Real -world mail has been sent to your address , please wait for it to come to you");    
	$m->Priority(3) ;    
	$m->smtp_on( "relay.jangosmtp.net", "SLDauctAdmin", "544710JJ",587) ;  
	$m->Send();    

	
	//	======================================================
	
?>