<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html/php"; charset="utf8">
    <link rel=stylesheet href='static/css/style.css'>
    <script src="static/js/reg-validation.js" ></script>
    <title>Registration</title>
  </head>
  <body>
    <div id="main">
      <form action="register.php" method="post" name="registerForm" onSubmit="return TestDataCheck()">
        <div id="title">Регестрация </div><br>
        Имя пользователя: <br><input type="text" name="login" maxlength="20" oninput="validateForm(1)"><br>
        <div id="lerr" style="color: red; display: none">Длина имени пользователя должна быть от 5 до 20 символов.</div>

        Имя: <br><input type="text" name="firstname" maxlength="20" oninput="validateForm(2)"><br>
        <div id="fnerr" style="color: red; display: none">Длина имени быть от 2 до 20 символов.</div>

        Фамилия: <br><input type="text" name="secondname" maxlength="20" oninput="validateForm(3)"><br>
        <div id="snerr" style="color: red; display: none">Длина фамилии должна быть от 2 до 20 символов.</div>

        Пароль: <br><input type="text" name="password" maxlength="25" oninput="validateForm(4)"><br>
        <div id="perr" style="color: red; display: none">Длина пароля должна быть от 6 до 25 символов.</div>

        Повторите пароль: <br><input type="text" name="password2" maxlength="25" oninput="validateForm(5)"><br>
        <div id="rperr" style="color: red; display: none">Пароли не совпадают.</div>

        E-mail: <br><input type="text" name="email" maxlength="20" oninput="validateForm(6)"><br>
        <div id="emerr" style="color: red; display: none">Введен некорректный e-mail адрес.</div>

        Адрес: <br><input type="text" name="address" maxlength="50"><br>
        <div id="aderr" style="color: red; display: none">Длина адреса должна быть от 0 до 50 символов.</div>

        <input id="sub" type="submit" value="Зарегистрироваться" style="cursor: pointer;"><br>
      </form>
    </div>
  </body>
</html>