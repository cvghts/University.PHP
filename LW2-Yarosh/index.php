<?php
//Завдання 1
$a = 5;
$b = 22;
$c = $a;
function t1() {
    global $a, $b, $c;
    $c = max($a, $b);
    echo $c .'<br>';
}
t1();

//Завдання 2
$d = rand(10, 20);
$e = rand(10,20);
echo '$d = '. $d .'<br>';
echo '$e = '. $e .'<br>';

function t2() {
    global $d, $e, $f;
    if ($d > $e) {
        $f = $d;
    } else {
        $f = $e;
    }
    echo "Значення f: $f" . '<br>';
    $f = $d;
    echo $f . '<br>';
}
t2();

//Завдання 3
$k = rand(0, 100);
$l = rand(0, 50);

echo 'значення до $k ='. $k .'<br>';
echo 'значення до $l ='. $l .'<br>';
function t3() {
global $k, $l;
if ($k > $l) {
    $temp = $k;
    $k = $l;
    $l = $temp;
}
}
t3();

echo 'значення після $k ='. $k .'<br>';
echo 'значення після $l ='. $l .'<br>';

//Завдання 4
$s1 = '031a109b72';
$s2 = 'C565D26Bc2cb';
$maxString = $s1;

function t4() {
    global $s1, $s2, $maxString;
    if (strlen($s2) > strlen($maxString)) {
        $maxString = $s2;
    }
    echo $maxString;
}
t4();

//Завдання 5
$password = bin2hex(random_bytes(rand(2,20)));
$successPass = false;
echo 'our pass: ' . $password;
function t5() {
    global $password, $successPass;
    if (strlen($password) >= 10) {
        $successPass = true;
    } else {
        $successPass = false;
    }
    echo $successPass;
}
t5();

//Завдання 6
$r1 = rand(0, 10);
 echo '$r1 = '. $r1 . '<br>';
        $r2 = 0;
function t6() {
    global $r1, $r2;
    if ($r1 >= 0 && $r1 <= 4) {
        $r2 = 1;
    } elseif ($r1 >= 5 && $r1 <= 7) {
        $r2 = 2;
    } elseif ($r1 >= 8 && $r1 <= 10) {
        $r2 = 3;
    }
    echo 'Результат: '. $r2;
}
t6();
?>