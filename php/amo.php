<?php

$apiToken = "6040481645:AAEhWyfZpa_RtBQ6f16_ysgPAt3fcVJlHb0";
$chatId = "1300143664";
$name = $_POST['name'];
$phone = $_POST['phone'];

$website = "https://api.telegram.org/bot" . $apiToken;
$update = file_get_contents("php://input");
$updateArray = json_decode($update, TRUE);

if (isset($_POST['name']) && isset($_POST['phone'])) {
  $text = "Имя: {$name}\nТелефон: {$phone}";
  $sendMessage = file_get_contents($website . "/sendmessage?chat_id=" . $chatId . "&text=" . urlencode($text));

  if ($sendMessage) {
    header("Location: thanks.html");
  } else {
    echo "Ошибка отправки данных";
  }
} else {
  echo "Ошибка: Данные с формы не были получены";
}
