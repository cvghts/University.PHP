<?php
// Створюємо новий файл
$myfile = fopen("textfile.txt", "w") or die("Неможливо вiдкрити файл!");
$txt = "Zhenya Yarosh\n";
fwrite($myfile, $txt);
fclose($myfile);

// Виводимо вміст файлу на екран
$handle = fopen('textfile.txt', 'r');
echo fread($handle, filesize('textfile.txt'));
fclose($handle);

// Додаємо до файлу нові дані
$myfile = fopen("textfile.txt", "a") or die("Неможливо вiдкрити файл!");
$txt = "Donald Tramp\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);

// Перейменовуємо файл
rename("textfile.txt", "newfile.txt");

// Виводимо вміст нового файлу на екран
echo file_get_contents("newfile.txt");
?>
