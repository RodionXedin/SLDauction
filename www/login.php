<?php
session_start();
mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
mysql_select_db("SLDauct") or die(mysql_error());
if (isset($_POST['login']) && isset($_POST['password']))
{
    $login = mysql_real_escape_string($_POST['login']);
    $password = ($_POST['password']);

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
        header('Refresh: 4; URL=http://www.sldauction/index.php');
        die('Такой логин с паролем не найдены в базе данных. Вы будете перенаправлены на главную странцу сайта через 4 секудны.');
    }
}
?>