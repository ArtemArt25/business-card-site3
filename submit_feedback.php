<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "lawyerart2020@gmail.com"; // Замените на ваш email
    $subject = "Новый отзыв от $name";
    $body = "Имя: $name\nEmail: $email\nОтзыв:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Спасибо! Ваш отзыв отправлен.";
    } else {
        echo "Ошибка при отправке отзыва.";
    }
}
?>