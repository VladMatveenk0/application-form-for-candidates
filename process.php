<?php
// Настройки подключения
$host = 'localhost';
$db = 'application_form_db';
$user = 'root'; // Замените на ваше имя пользователя
$pass = '6464463017a1p0au3t0@@'; // Замените на ваш пароль
$charset = 'utf8mb4';
print_r($_POST);
print_r($_FILES);
// Подключение к базе данных
$conn = new mysqli($host, $user, $pass, $db);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из POST
$data = $_POST;

// Преобразование массива в JSON
$jsonData = json_encode($data);

// Подготовка SQL-запроса
$stmt = $conn->prepare("INSERT INTO candidates (id, full_name, data) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Ошибка подготовки запроса: " . $conn->error);
}

// Установка значений
$id = isset($data["id"]) ? $data["id"] : null; // Если id не передан, установите null
$fullName = $data['second_name'] . ' ' . $data['name'] . ' ' . $data['surname'];
$stmt->bind_param("iss", $id, $fullName, $jsonData);

// Выполнение запроса
if ($stmt->execute()) {
    echo "Данные успешно записаны в базу данных!";
} else {
    echo "Ошибка записи данных: " . $stmt->error;
}

// Обработка загруженных файлов
$uploadDir = 'uploads/'; // Папка для сохранения загруженных файлов
$maxFileSize = 5 * 1024 * 1024; // Максимальный размер файла 5 МБ
echo $_FILES['file_list'];
if (isset($_FILES['file_list'])) {
    $fileList = $_FILES['file_list'];
    $uploadedFiles = [];

    for ($i = 0; $i < count($fileList['name']); $i++) {
        echo "Файл " . $fileList['name'][$i];
        if ($fileList['error'][$i] === UPLOAD_ERR_OK) {
            if ($fileList['size'][$i] <= $maxFileSize) {
                $tmpName = $fileList['tmp_name'][$i];
                $fileName = basename($fileList['name'][$i]);
                $uploadFilePath = $uploadDir . uniqid() . '_' . $fileName; // Уникальное имя файла

                if (move_uploaded_file($tmpName, $uploadFilePath)) {
                    $uploadedFiles[] = $uploadFilePath; // Сохраняем путь к загруженному файлу
                } else {
                    echo "Ошибка при загрузке файла: " . $fileName;
                }
            } else {
                echo "Файл " . $fileList['name'][$i] . " превышает максимальный размер 5 МБ и не будет загружен.";
            }
        } else {
            echo "Ошибка загрузки файла: " . $fileList['name'][$i];
        }
    }

    // Выводим список загруженных файлов
    echo $uploadedFiles;
    if (!empty($uploadedFiles)) {
        echo "Загруженные файлы: " . implode(", ", $uploadedFiles);
    }
}

// Закрытие соединения
$stmt->close();
$conn->close();

?>