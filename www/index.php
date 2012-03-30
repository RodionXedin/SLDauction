<?php
session_start();
?>
<head>
    <meta http-equiv="Content-Type" content="text/html/php"; charset="utf8">
    <link rel=stylesheet href='static/css/style.css'>
    <title>Main page</title>    
</head>
<div id="container">
<div id="header" align="right">
<div id="login" align="left">
<?php
if (isset($_SESSION['user_id'])) {
    mysql_connect("localhost","root","") OR DIE("DATABASE EXCEPTION."); 
    mysql_select_db("SLDauct") or die(mysql_error());

    $id = $_SESSION['user_id'];
    $query = "SELECT `username` FROM `users` WHERE `id`='{$id}' LIMIT 1";
    $result = mysql_query($query) or die(mysql_error());
    if (mysql_num_rows($result) == 1) {
        $row = mysql_fetch_assoc($result);
        echo 'Welcome <b>'.$row['username'].'</b>!';
    }
?>
    <br><a href="logout.php">Выйти</a>
<?php
}
else {
?>

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
            <td><input type="submit" value="Войти" style="cursor: pointer;"/></td>
            <td><input type="button" value="Зарегистрироваться" onclick="location.href='/register.php'" style="margin-left:-100px; cursor: pointer;"/>
        </tr>
    </table>
</form>

<?php
}
?>
</div></div>
<div id="main">
Main Page!<br><br><br><br><br><br><br>
</div></div>