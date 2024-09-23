<?php

$name = $_POST["name"];
$ear = $_POST["ear"];
$tel = $_POST["tel"];

$name = htmlspecialchars($name)
$ear = htmlspecialchars($ear)
$tel = htmlspecialchars($tel)

$name = urlencode($name)
$ear = urlencode($ear)
$tel = urlencode($tel)

$name = trim($name)
$ear = trim($ear)
$tel = trim($tel)

if (mail("matvey228yh8@mail.ru"
    "Новое письмо с сайта Програмирование"
    "Имя: ".$name."\n".
    "Возраст: ".$ear."\n".
    "Телефон: ".$tel."\n".
    "From: github@mail.ru" \r\n))

    {
        echo ("Письмо успешно отправлено.")
    }

    else {
        echo ("Есть ошибки! Проверьте данные.")
    }














?>
