<?php
session_start();
mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
mysql_select_db("SLDauct") or die(mysql_error());
if (isset($_POST['login']) && isset($_POST['password']))
{
    $login = mysql_real_escape_string($_POST['login']);
    $password = ($_POST['password']);

    // делаем запрос к БД
    // и ищем юзера с таким логином и паролем

    $query = "SELECT `id`
            FROM `users`
            WHERE `username`='{$login}' AND `password`='{$password}'
            LIMIT 1";
    $sql = mysql_query($query) or die(mysql_error());
    if (mysql_num_rows($sql) == 1) {
        $row = mysql_fetch_assoc($sql);
        $_SESSION['user_id'] = $row['id'];
        header('Location:index.php');

    }
    else {
        die('Такой логин с паролем не найдены в базе данных. И даём ссылку на повторную авторизацию.');
    }
}
?>