<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mail = $_POST['mail'];
    
    $message = "Была получена форма! Имя: $name Возраст: $age Сообщение: $mail";
    $to = "oskarlozkin@gmail.com";
    $from = "no-reply@oskar.ru";
    $subject = "Форма от " . $name;

    $encoded_subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";

    if(trim($name) == "") {
        echo "Вы не ввели своё имя.";
    } else if(trim($age) == "") {
        echo "Вы не ввели свой возраст";
    } else if(trim($mail) == "") {
        echo "Вы не ввели своё сообщение";
    } else {
        echo "Отлично! Форма успешно была отправлена. <p>Вот все ваши данные, которые вы указывали:</p> Имя: $name <br>Возраст: $age <br>Сообщение: $mail";
        echo "<p>Результат был отправлен на почту oskarlozkin@gmail.com</p>";

        if(mail($to, $encoded_subject, $message, $headers)) {
            echo "<p>Письмо успешно отправлено!</p>";
        } else {
            echo "<p>Ошибка при отправке письма!</p>";
        }
    }
} else {
    echo "Неверный метод запроса";
}
?>