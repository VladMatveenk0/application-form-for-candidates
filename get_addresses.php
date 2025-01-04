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
$query = trim($query);
$query = htmlspecialchars($query);

$sql = "SELECT address FROM your_address_table WHERE address LIKE ? LIMIT 10";
$stmt = $conn->prepare($sql);
$likeQuery = "%$query%";
$stmt->bind_param("s", $likeQuery);
$stmt->execute();
$result = $stmt->get_result();

$addresses = [];
while ($row = $result->fetch_assoc()) {
    $addresses[] = $row['address']; 
}

echo json_encode($addresses);

$stmt->close();
$conn->close();
?>