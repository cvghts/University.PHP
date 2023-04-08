<?php
    //Ініціюємо сесію
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location: admin.php');
        exit();
    }
    //Визначаємо логін і пароль $login = 'admin';
    $login = 'admin';
    $password = 'admin';
    // Якщо дані логінізації отримано
    if (isset($_POST['login']) && isset($_POST['password'])) {
        //Якщо дані логінізації співпадають з логіном і паролем
        if ($_POST['login'] == 'admin' && $_POST['password'] == $password) {
            //Записуємо в сесію успішну авторизацію
            $_SESSION['user'] = true;
            //I робимо перенаправлення на admin.php
            header("Location: admin.php");
        }
    }
?>
<!-- Форма для логінізації -->
<form action="login.php" method="post">
    Логін <input type="text" placeholder="Login" name="login"><br>
    Пароль <input type="password" placeholder="Password" name="password"><br>
    <input type="submit" value="Відправити">
</form>