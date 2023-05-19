<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="stylesheet" href="/style/regstyle.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  </head>
<body>
    <div class="regform">
      <form action="/vendor/auth.php" method="post" enctype="multipart/form-data">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="pass" placeholder="Введите пароль">
        <button type="submit">Подтвердить</button>
        <p>
        Нет аккаунта? - <a href="/registration/register.php">Регистрация</a>!
        </p>
    </div>
</body>
</html>