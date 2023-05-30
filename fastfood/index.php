<?php
$servername = "localhost";
$username = "root";
$password = "23Mackiv1998";
$dbname = "fastfood";

// Створення нового об'єкту mysqli для підключення до бази даних
$conn = new mysqli($servername, $username, $password, $dbname);

// Перевірка підключення до бази даних
if ($conn->connect_error) {
    die("Помилка підключення до бази даних: " . $conn->connect_error);
}

echo "Підключення до бази даних успішно!";
?>
