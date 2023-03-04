<!-- Подключаем базу данных -->
<?php
$servername = "localhost";
$database = "wounder_tour";
$username = "root";
$password = "";
// Создаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "База подключна" . "<br>";
}
?>