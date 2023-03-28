<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "6040481645:AAEhWyfZpa_RtBQ6f16_ysgPAt3fcVJlHb0";


$chat_id = "1338691940";
$chat_id2 = "1300143664";
$chat_id3 = "648170081";

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
$sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id2}&parse_mode=html&text={$txt}", "r");
$sendToTelegram3 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id3}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {

  ob_start();
  $new_url = '../thanks.html';
  header('Location: ' . $new_url);
  ob_end_flush();
} else {
  echo "Error";
}
