<?php
    //Ініціюємо сесію session_start();
    session_start();
    if(!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit();
    }
    //Якщо отримано запит на вихід
    if (isset($_GET['logout'])) { 
        //Знищуємо сесію
        session_destroy();
        //Перенаправлення на login.php
        header("Location: login.php");
    }
?>
<h2>Ви успішно авторизовані в системі</h2>
<a href="admin.php?logout">Вийти</a>