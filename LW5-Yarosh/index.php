<?php
//Завдання 1
function hello1() {
  echo "Hello, Guest!";
}
//Завдання 2
function hello2($name) {
  echo "Hello, $name!";
}

//Завдання 3
function getSum($num1, $num2) {
  echo $num1 + $num2;
}

//Завдання 4
$a = 5;
function sum($a) {
  $a += 10;
}
var_dump($a); // 5
echo "<br>";
sum($a);
var_dump($a); // 5
echo "<br>";
/*У функції sum() ми змінюємо значення змінної $a, але це робиться локально в межах функції. 
Зовнішня змінна $a залишається незмінною. Тому обидва виклики var_dump() виводять 5.*/

//Завдання 5
$a = 5;
function sum_fixed(&$a) {
  $a += 10;
}
var_dump($a); // 5
echo "<br>";
sum_fixed($a);
var_dump($a); // 15
echo "<br>";

//Завдання 6
function test() {
  static $a = 0;
  echo $a . "<br>";
  $a++;
}
test(); // 0
test(); // 1
test(); // 2
/*У функції test() є статична змінна $a, яка зберігає своє значення між викликами функції.
При першому виклику функції $a має значення 0, яке виводиться за допомогою функції echo. 
Потім $a збільшується на 1 за допомогою оператора інкременту $a++. 
На другому виклику функції змінна $a має значення 1, яке виводиться, а потім збільшується на 1.
Таким чином, при кожному наступному виклику функції, вона спочтаку виводить значення, а потім збільшується на 1.*/

//Завдання 7
function newSum() {
  $sum = 0;
  foreach (func_get_args() as $arg) {
    $sum += $arg;
  }
  echo $sum;
}
newSum(1,2,3); // 6
echo "<br>";
newSum(1,2,3,4,5); // 15
echo "<br>";
newSum(5,6,8,3); // 22
echo "<br>";

//Завдання 8
function getCount($arr) {
  return count($arr);
}
$arr = [1,2,3,4,5,6,7,8,9,10,];
$goods = [
[
'title' => 'Nokia',
'price' => '100',
'qty' => '10',
],
[
'title' => 'Sony',
'price' => '120',
'qty' => '7',
],
[
'title' => 'LG',
'price' => '105',
'qty' => '15',
],
];
echo getCount($arr) . "<br>";
echo getCount ($goods) . "<br>";

//Завдання 9
function showAge($yearOfBirth) {
    $currentYear = date('Y');
    $age = $currentYear - $yearOfBirth;
    echo "Ваш вік: " . $age;
}
?>
