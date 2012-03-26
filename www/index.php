<?php
session_start();
if (isset($_SESSION['user_id'])) {
echo "Welcome registered user which uses that damn cookies , your session is active and working ! YEAH BABY!!";
}
else
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html/php"; charset="utf8">
    <link rel=stylesheet href=\'static/css/style.css\'>
    <script src="static/js/reg-validation.js" ></script>
    <title>SLDauction</title>  
</head>
<body>
<form action="login.php" method="post">

    <table>
        <tr>
            <td>Логин:</td>
            <td><input type="text" name="login" /></td>
        </tr>
        <tr>
            <td>Пароль:</td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Войти" /></td>
            <td><input type="button" value="Зарегистривоваться" onclick="location.href=\'register.php\'" />
        </tr>
    </table>
</form>
</body>
</html>'
?>
