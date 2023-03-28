<?php
 
// Токен
const TOKEN = '5497849493:AAEGIwSrHSlMo5iXP5_XjfEFY8LAC2R6nsE';

// ID чата
const CHATID = '-1001203571535';

// Проверяем не пусты ли поля с именем и телефоном
if (!empty($_POST['phone'])) {
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";

    // Номер телефона
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $txt .= "" . strip_tags(trim(urlencode($_POST['phone']))) . "%0A";
    }

    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt); 
    if ($textSendStatus) {
        header('Location: ../thanks.html');
    }
    else {
        echo "Error";
    }
}
