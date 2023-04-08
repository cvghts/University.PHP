<?php
//Завдання 1
for ($i = 1; $i <= 100; $i++) {
  echo $i . "<br>";
}

//Завдання 2
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
}
echo $sum . "<br>";

//Завдання 3
// Через цикл while
$number = 1000;
$iterations = 0;
while ($number >= 50) {
  $number /= 2;
  $iterations++;
}
echo "Число: " . $number . "<br>";
echo "Кількість ітерацій: " . $iterations . "<br>";

// Через цикл for
$number = 1000;
$iterations = 0;
for ($i = $number; $i >= 50; $i /= 2) {
  $iterations++;
}
echo "Число: " . $i . "<br>";
echo "Кількість ітерацій: " . $iterations . "<br>";

//Завдання 4
for ($i = 5; $i >= 0; $i--) {
  echo $i . " ";
  echo 5 - $i . " ";
  echo $i - 1 . " ";
}
echo "<br>";

//Завдання 5
echo "<select>";
$year = 1900;
while ($year <= 2023) {
  echo "<option value='{$year}'>{$year}</option>";
  $year++;
}
echo "</select>";

//Завдання 6
echo '<table border="1" width="100%">';
for ($i = 1; $i <= 10; $i++) {
  echo "<tr>";
  for ($j = 1; $j <= 10; $j++) {
    echo "<td>" . $i * $j . "</td>";
  }
  echo "</tr>";
}
echo '</table>';
?>