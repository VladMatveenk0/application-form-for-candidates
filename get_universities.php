<?php
// Настройки подключения
$host = 'localhost';
$db = 'application_form_db';
$user = 'root'; 
$pass = '6464463017a1p0au3t0@@'; 
$charset = 'utf8mb4';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$query = isset($_GET['query']) ? $_GET['query'] : '';
$query = trim($query); // удалить пробелы
$query = htmlspecialchars($query); // экранировать спецсимволы

$sql = "SELECT name FROM institute WHERE name LIKE ? LIMIT 10";
$stmt = $conn->prepare($sql);
$likeQuery = "%$query%";
$stmt->bind_param("s", $likeQuery);
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    die("Ошибка запроса: " . $stmt->error);
}

$universities = [];
while ($row = $result->fetch_assoc()) {
    $universities[] = $row;
}

echo json_encode($universities);

$stmt->close();
$conn->close();
?>
