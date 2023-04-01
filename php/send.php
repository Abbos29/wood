<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "6040481645:AAEhWyfZpa_RtBQ6f16_ysgPAt3fcVJlHb0";


$chat_id = "-1001867762381";
// $chat_id = "1338691940";
// $chat_id2 = "1300143664";
// $chat_id3 = "2115232569";
// $chat_id4 = "648170081";

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
// $sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id2}&parse_mode=html&text={$txt}", "r");
// $sendToTelegram3 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id3}&parse_mode=html&text={$txt}", "r");
// $sendToTelegram4 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id4}&parse_mode=html&text={$txt}", "r");


if ($sendToTelegram) {

  ob_start();
  $new_url = '../thanks.html';
  header('Location: ' . $new_url);
  ob_end_flush();
} else {
  echo "Error";
}





// Новый дополненный код

// $name = $_POST['name'];
// $phone = $_POST['phone'];

// $token = "6040481645:AAEhWyfZpa_RtBQ6f16_ysgPAt3fcVJlHb0";
// $chat_id = "-1001867762381";

// $arr = array(
//     'Имя пользователя: ' => $name,
//     'Телефон: ' => $phone,
// );

// foreach ($arr as $key => $value) {
//     $txt .= "<b>" . $key . "</b> " . $value . "%0A";
// };

// $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

// if ($sendToTelegram) {
//     create_lead($name, $phone);
//     ob_start();
//     $new_url = '../thanks.html';
//     header('Location: ' . $new_url);
//     ob_end_flush();
// } else {
//     echo "Error";
// }

// function create_lead($name, $phone) {
//     $access_token = 'your_amocrm_access_token';
//     $subdomain = 'your_amocrm_subdomain'; // e.g., company.amocrm.ru
//     $api_url = "https://{$subdomain}.amocrm.ru/api/v4/leads";

//     $lead_name = 'New lead - ' . $name;

//     $lead_data = array(
//         'name' => $lead_name,
//         'custom_fields_values' => array(
//             array(
//                 'field_id' =>  your_custom_field_id_for_phone, // Replace with your amoCRM phone field ID
//                 'values' => array(
//                     array(
//                         'value' => $phone,
//                     ),
//                 ),
//             ),
//         ),
//     );

//     $headers = array(
//         'Content-Type: application/json',
//         'Authorization: Bearer ' . $access_token,
//     );

//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_URL, $api_url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($lead_data));
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');

//     $response = curl_exec($ch);
    
//     // Check for errors
//     if (curl_errno($ch)) {
//         echo 'Curl error: ' . curl_error($ch);
//     }

//     curl_close($ch);
// }