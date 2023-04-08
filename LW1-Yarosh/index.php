<?php
     //Завдання 1
     $a = 3;
     $b = 5;
     $c = $a;
     $a = $b;
     $b = $c;
     echo "a = ".$a."<br/>";
     echo "b = ".$b;
     echo '<br/>';

     //Завдання 2
     $var = "Hello";
     $VAR = "world";
     echo $var."<br/>";
     echo $VAR;
     echo '<br/>';

     //Завдання 3
     $var1 = false;
     $var2 = -0.78902;

     //Завдання 4
     define("NUMBER_E", 2.71828);
     echo NUMBER_E;
     echo '<br/>';

     //Завдання 5
     if (defined('NUMBER_E')) {
          echo "NUMBER_E exists";
          echo '<br/>';
     } else {
          echo "NUMBER_E does not exist";
          echo '<br/>';
     }

     //Завдання 6
     $test1 = '12345'; // на число
     $test1 = (integer) $test1;

     $test2 = '12.345'; // на ціле число
     $test2 = (int) $test2; 

     $test3 = 12345; // на рядок
     $test3 = (string) $test3; 

     //Завдання 7
     $text = 'Hello, World!';
     echo $text . "<br/>";
     echo strlen($text) . "<br/>";
     $text_reversed = strrev($text);
     echo $text_reversed . "<br/>";
     $text_replaced = str_replace('World', 'Zhenya', $text);
     echo $text_replaced;
     echo "<br/>";

     //Завдання 8
     $text1 = 'Hello, ';
     $text2 = 'World!';
     echo $text1 . $text2;
     echo "<br/>";

     //Завдання 9
     $newText = 'abcde';
     echo $newText[0];
     echo $newText[2];
     echo $newText[4];
     echo "<br/>";

     //Завдання 10
     $line = 'Zhenya';
     $line[0] = '!';
     echo $line;

?>