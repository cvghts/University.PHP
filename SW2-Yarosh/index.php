<?php

//Завдання 1
$var1 = 5.6;
$var2 = 8.9;

echo "Сума: " . ($var1 + $var2) . "<br>";
echo "Різниця: " . ($var1 - $var2) . "<br>";
echo "Множення: " . ($var1 * $var2) . "<br>";
echo "Ділення: " . ($var1 / $var2) . "<br>";
echo "Залишок: " . ($var1 % $var2) . "<br>";

//Завдання 2
$a = -2;
$a *= 3;
$a += 1;
echo $a . "</br>";

//Завдання 3
$numbers = [9, 23, 0, -24.5, 34, 11, 41, 3, -3.2, 3];
$max = $numbers[0];
foreach ($numbers as $number) {
  if ($number > $max) {
    $max = $number;
  }
}
echo $max . "</br>";

//Завдання 4
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "</br>";

//Завдання 5
$text = 'Я';
$text .= ' хочу';
$text .= ' знати';
$text .= ' PHP!';
echo $text . "</br>";

//Завдання 6
$Var = 10;
$Var++;
$Var++;
$Var--;
echo $Var . "</br>";

//Завдання 7
$VAR = 10;
$VAR += 7;
$VAR++;
$VAR--;
$VAR += 12;
$VAR *= 7;
$VAR -= 15;
echo $VAR . "</br>";

//Завдання 8
var_dump(!1); // bool(false)
var_dump(!0); // bool(true)
var_dump(!true); // bool(false)
var_dump(2 && 3); // bool(true)
var_dump(5 && 0); // bool(false)
var_dump(3 || 0); // bool(true)
var_dump(5 / 1); // float(5)
var_dump(1/5); // float(0.2)
var_dump(5 + '5string'); // int(10)
var_dump('5' == 5); // bool(true)
var_dump('05' == 5); // bool(true)
var_dump('05' == '5'); // bool(false)

//Завдання 9
echo "</br>";
echo "\"" . "</br>";
echo "'" . "</br>";
echo "\\" . "</br>"; 
echo "\n" . "</br>";
echo "<div></div>"  . "</br>";

//Завдання 10
echo "\"" . "'" . "\\" . "\n" . "<div></div>";

//Завдання 11
$s = "ASDпросто текстASD";
$s = substr($s, 0, -3);
$s = strtolower(substr_replace($s, "asd", 0, 3));
echo substr($s, 0, 3);
?>