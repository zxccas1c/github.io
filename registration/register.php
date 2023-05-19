<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>registration</title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <link rel="stylesheet" href="/style/regstyle.css">
</head>
<body>
    <div class="regform">
        <form action="/vendor/reg.php" method="post" enctype="multipart/form-data">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите логин">
            <label>Email</label>
            <input type="email" name="email" placeholder="Введите Email">
            <label>Пароль</label>
            <input type="password" name="pass" placeholder="Введите пароль">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Подтверждение пароля">
            <button type="submit">Подтвердить!</button>
            <p>
                уже есть аккаунт? - <a href="/registration/authorisation.php">Авторизация</a>!
            </p>
    </div>
                    
</body>
</html>