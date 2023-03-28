<?php

// $botToken = 'TOKEN';
// $botUrl = 'https://api.telegram.org/bot' . $botToken;
// $webhookUrl = 'https://example.com/telegram.php';

// $response = file_get_contents($botUrl . '/setWebhook?url=' . $webhookUrl);

// if ($response) {
//     echo 'Webhook установлен';
// } else {
//     echo 'Ошибка при установке webhook';
// }


// $message = '';
// $name = $_POST['name'];
// $tel = $_POST['tel'];

// if (!empty($name) && !empty($tel)) {
//     $message = sprintf('Имя: %s\nEmail: %s', $name, $tel);
// } else {
//     $message = 'Необходимо заполнить все поля';
// }

// $chatId = 'CHAT_ID'; // Заменить на ID вашего чата с ботом
// $telegramUrl = $botUrl . '/sendMessage?chat_id=' . $chatId . '&text=' . urlencode($message);

// $response = file_get_contents($telegramUrl);

// if ($response) {
//     echo 'Сообщение отправлено';
// } else {
//     echo 'Ошибка при отправке сообщения';
// }
