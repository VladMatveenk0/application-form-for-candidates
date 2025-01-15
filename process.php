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
$fullName = $secondName . ' ' . $name . ' ' . $surname;

// Преобразование массива в JSON
$jsonData = json_encode($_POST);

// Проверяем, существует ли запись с таким id в базе данных
$stmt = $conn->prepare("SELECT * FROM candidates WHERE id = ?");
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Обновляем существующую запись
    $stmt = $conn->prepare("UPDATE candidates SET full_name = ?, data = ? WHERE id = ?");
    $stmt->bind_param("sss", $fullName, $jsonData, $id);
} else {
    // Создаем новую запись
    $stmt = $conn->prepare("INSERT INTO candidates (id, full_name, data) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $id, $fullName, $jsonData);
}

// Выполняем запрос
// Обработка отправки формы
if ($stmt->execute()) {
    // Записываем лог о успешной отправке формы
    $logDir = 'logs/' . $id . '_' . $fullName;
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }
    $logDate = date('Y-m-d');
    $logFile = $logDir . '/' . $logDate . '.log';
    $logMessage = date('H:i:s') . ' - Пользователь подтвердил согласие на обработку персональных данных и отправил анкету.' . "\n";
    $logMessage .= date('H:i:s') . ' - Пользователь подтвердил, что все указанные им сведения полны и соответствуют действительности.' . "\n";
    $logMessage .= date('H:i:s') . ' - Пользователь согласен на проведение проверочных мероприятий.' . "\n";
    $logMessage .= date('H:i:s') . ' - Пользователь обязуется сообщить о любых изменениях в анкетных данных в 3-дневный срок.' . "\n";
    error_log($logMessage, 3, $logFile);

    echo "Данные успешно отправлены!";
} else {
    // Записываем лог об ошибке
    $logDir = 'logs/' . $id . '_' . $fullName;
    if (!is_dir($logDir)) {
        mkdir($logDir, 0777, true);
    }
    $logDate = date('Y-m-d');
    $logFile = $logDir . '/' . $logDate . '.log';
    $logMessage = date('H:i:s') . ' - Ошибка отправки данных: ' . $stmt->error . "\n";
    error_log($logMessage, 3, $logFile);

    echo "Ошибка отправки данных: " . $stmt->error;
}

// Обработка загруженных файлов
$uploadDir = 'uploads/';
$maxFileSize = 5 * 1024 * 1024; // Максимальный размер файла 5 МБ

// Создаем папку пользователя
$userDir = $uploadDir . $id . '_' . $fullName;
if (!is_dir($userDir)) {
    mkdir($userDir, 0777, true);
}

foreach ($_FILES as $key => $files) {
    if (is_array($files['tmp_name'])) {
        foreach ($files['tmp_name'] as $index => $tmpName) {
            $fileName = basename($files['name'][$index]);
            if ($files['error'][$index] === UPLOAD_ERR_OK) {
                $uploadFilePath = $userDir . '/' . uniqid() . '_' . $fileName;

                if (move_uploaded_file($tmpName, $uploadFilePath)) {
                    echo "Файл $fileName успешно загружен!";
                } else {
                    echo "Ошибка при загрузке файла $fileName";
                }
            } else {
                echo "Ошибка загрузки файла $fileName";
            }
        }
    } else {
        $fileName = basename($files['name']);
        if ($files['error'] === UPLOAD_ERR_OK) {
            $uploadFilePath = $userDir . '/' . uniqid() . '_' . $fileName;

            if (move_uploaded_file($files['tmp_name'], $uploadFilePath)) {
                echo "Файл $fileName успешно загружен!";
            } else {
                echo "Ошибка при загрузке файла $fileName";
            }
        } else {
            echo "Ошибка загрузки файла $fileName";
        }
    }
}

// Закрытие соединения
$stmt->close();
$conn->close();

?>