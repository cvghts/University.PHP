<?php
//Завдання 1
$a = array('Каріна',  'Діма', 'Олег');
echo "<pre>" . print_r($a, 1) ."</pre>";
//Завдання 2
$a[ ] = 'Єгор'; 
array_push($a, 'Андрій');
array_unshift($a, 'Анастасія');
//Завдання 3
array_splice($a, 7, 0, 'Cyber');
print_r($a);
//Завдання 4
echo "<br/>";
$array = array (
    1    =>   "a",
    "1"  =>   "b",
    1.5  =>   "c",
    true =>  "d",
);
var_dump($array);
echo "<br/>";
/*У масиві $array ключі "1" і 1 сприймаються як один ключ, 
тому значення "b" замінює значення "a". Результат виконання 
var_dump($array) містить три елементи з ключами 1, 1.5 і true.*/
//Завдання 5
$nums = array();
for ($i = 1; $i <= 20; $i++) {
    $nums[] = $i;
}
echo implode(' ', $nums);
echo "<br/>";
//Завдання 6
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . ' ';
}
echo "<br/>";
//Завдання 7
$goods = array(
    array(
        'title' => 'Nokia',
        'price' => '200',
        'qty' => 10
    ),
    //Завдання 8
    array(
        'title' => 'Samsung',
        'price' => '500',
        'qty' => 5
    ),
    array(
        'title' => 'Apple',
        'price' => '1000',
        'qty' => 3
    )
);

//Завдання 9
echo $goods[2]['title'];
echo "<br/>";
//Завдання 10
for($i=0; $i<count($goods); $i++) {
    echo "Назва: {$goods[$i]['title']} <br>";
    echo "Ціна: {$goods[$i]['price']} <br>";
    echo "Кількість: {$goods[$i]['qty']} <br>";
    echo "<hr>";
}
//Завдання 11
foreach($goods as $good) {
    echo "Назва: {$good['title']} <br>";
    echo "Ціна: {$good['price']} <br>";
    echo "Кількість: {$good['qty']} <br>";
    echo "<hr>";
}
//Завдання 12
foreach($goods as &$good) {
    $good['total'] = $good['price'] * $good['qty'];
}
?>