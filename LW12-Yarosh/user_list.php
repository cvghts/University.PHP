<?php
$username = 'root';
$password = 'zhenyayarosh_22112004';
$dsn = 'mysql:host=localhost; dbname=my_db; charset=utf8';
$connection = new PDO ($dsn, $username, $password);
$connection->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "SELECT * FROM users";
$stmt = $connection->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();
print_r($users);


echo "<table class='table table-bordered'>";
echo "<thead>
        <tr>
        <th>User ID</th>
        <th>Login</th>
        <th>Email</th>
        <th>Password</th>
        <th>Registration Date</th>
        </tr>
    </thead>";
echo "<tbody>";
foreach ($users as $row) {
    echo "<tr>";
    echo "<td>" . $row["user_id"] . "</td>";
    echo "<td>" . $row["login"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["password"] . "</td>";
    echo "<td>" . $row["registration_date"] . "</td>";
echo "</tr>";
}
echo "</tbody>";
echo "</table>";

//Отримуємо значення для дії, яка можливо відбулася
$action = isset($_POST['action']) ? $_POST['action'] : '';

//Якщо відбулася відправка форми, то здійснюємо запит на вставку
if($action == 'add') {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $registrationDate = date('Y-m-d');
    $sql = "INSERT INTO users (login, password, email, registration_date)". "VALUES (?, ?, ?, ?)";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$login, $password, $email, $registrationDate]);
}
?>