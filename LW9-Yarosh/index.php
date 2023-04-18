<?php
require_once 'config.php';
require_once 'function.php';
$conn = connect();
echo '<pre>';
echo 'Select: <br>';
$testSelect = select("SELECT * FROM cars");
print_r($testSelect);
//echo 'Insert: <br>';
//$testSelect = execQuery("INSERT INTO cars (cars, image, cost) VALUES
//('Cadillac Escalade Platinum', 'http://elite.cars.ua/img/upload/cache/zc-1_iar-1_h-357_w-570_5ecd1aa8a55af5_5',
//'47777')");
//var_dump($testInsert);
echo 'Update: <br>';
$testUpdate = execQuery("UPDATE cars SET cars='Cadillac Escalade' WHERE id = 6");
var_dump($testUpdate);
echo 'Delete: <br>';
$testDelete = execQuery("DELETE FROM cars WHERE cars='Cadillac Escalade'");
var_dump($testDelete);
function getExpensiveCars() {
    global $conn;

    $sql = "SELECT cars FROM cars WHERE cost > 100000";
    $result = $conn->query($sql);

    $cars = array();

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($cars, $row["cars"]);
        }
    }

    return $cars;
}

function updateCarsPrice() {
    global $conn;

    $sql = "UPDATE cars SET cost = cost - 2800 WHERE cost >= 100000 AND cost <= 200000";
    $result = $conn->query($sql);

    return $result;
}
?>