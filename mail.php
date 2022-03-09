<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $choose = $_POST['choose'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $content = $choose .  ' заинтересовал потенциального студента' .  ' его номер ' . $phone . ' электронная почта ' . $email;

    $success = mail(' callme@posh.com)', 'Заказ на сате language school', $content);

    if($success) {
        http_response_code(200);
        echo 'Заказ отправлен';
    } else {
        http_response_code(500);
        echo 'Заказ не отправлен';
    }
} else {
    http_response_code(400);
    echo 'Такой запрос не поддерживается';
}




