<?php
function connect() {
// Створити підключення
$conn = mysqli_connect(SERVER, USER, PASSWORD, DB);
// Перевірити підключення
if (!$conn) {
die("Підключення не вдалося:" . mysqli_connect_error());
}
echo "Підключено успішно";

// Встановлюємо кодування
mysqli_set_charset($conn, "utf8mb4");
return $conn;
}

function select($query) {
    global $conn;

    $queryResult = [];
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { 
            $queryResult[] = $row;
        }
    }
return $queryResult;
}

function execQuery($query) { 
    global $conn;

    if (mysqli_query($conn, $query)) { 
        return true;
    } else {
        return false;
    }
}
?>