<?php
echo readfile("web.txt");
$myfile=fopen("web.txt", "r") or die("Неможливо вiдкрити þайл!");
echo fread($myfile, filesize("web.txt"));
fclose($myfile);
$myfile=fopen("web.txt", "r") or die("Неможливо вiдкрити þайл!");
echo fgets($myfile);
fclose($myfile);
$myfile = fopen("web.txt", "r") or die("Неможливо вiдкрити þайл!");
// Output one line until end-of-file
while (!feof($myfile)) {
echo fgets($myfile). "<br>";
}
fclose($myfile);
?>

