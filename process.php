<?php
// Настройки подключения
$host = 'localhost';
$db = 'application_form_db';
$user = 'root'; // Замените на ваше имя пользователя
$pass = '6464463017a1p0au3t0@@'; // Замените на ваш пароль
$charset = 'utf8mb4';
// Подключение к базе данных
$conn = new mysqli($host, $user, $pass, $db);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из POST
$secondName = isset($_POST['second_name']) ? $_POST['second_name'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$surname = isset($_POST['surname']) ? $_POST['surname'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : 0; // Если id не передан, установите null


// Преобразование массива в JSON
$jsonData = json_encode($_POST);

// Подготовка SQL-запроса
$stmt = $conn->prepare("INSERT INTO candidates (id, full_name, data) VALUES (?, ?, ?)");
if ($stmt === false) {
    die("Ошибка подготовки запроса: " . $conn->error);
}

// Установка значений
$fullName = $secondName . ' ' . $name . ' ' . $surname;
$stmt->bind_param("iss", $id, $fullName, $jsonData);

// Выполнение запроса
if ($stmt->execute()) {
    echo "Данные успешно записаны в базу данных!";
} else {
    echo "Ошибка записи данных: " . $stmt->error;
}

// Обработка загруженных файлов
if (empty($_FILES)) {
    echo "Файлы не загружены. Проверьте форму.";
} else {
    print_r($_FILES); // Выводим содержимое $_FILES для отладки
}
// Обработка загруженных файлов
$uploadDir = 'uploads/'; // Папка для сохранения загруженных файлов
$maxFileSize = 5 * 1024 * 1024; // Максимальный размер файла 5 МБ

if (isset($_FILES['file_list'])) {
    $fileList = $_FILES['file_list'];
    $uploadedFiles = [];
    for ($i = 0; $i < count($fileList['name']); $i++) {
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
    if (!empty($uploadedFiles)) {
        echo "Загруженные файлы: " . implode(", ", $uploadedFiles);
    }
}

// Закрытие соединения
$stmt->close();
$conn->close();

?>