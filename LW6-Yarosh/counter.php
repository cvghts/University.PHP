<?php
//Отримуємо кількість клацань з GET-запиту (або 0, якщо дані не передались)
$clicks = (isset($_GET['clicks'])) ? $_GET['clicks'] : 0;
$clicks++;
//Виводимо кількість клацань
echo "Number of clicks: $clicks<br>";
//Посилання для наступного запиту
echo "<a href='counter.php?clicks=$clicks'>Count Me</a>";
?>