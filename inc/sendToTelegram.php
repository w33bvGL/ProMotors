<?php
$telegramToken = '6045243568:AAGWR_YfdguqnMEHq_9T97KVSK1f_eml4P0';
$chatId = '5488051276';

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

$text = "New Message:\n\n";
$text .= "Name: $name\n";
$text .= "Email: $email\n";
$text .= "Date: $date\n";
$text .= "Time: $time\n";
$text .= "Message: $message";

file_get_contents("https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($text));

echo 'Message sent successfully!';
header("location: ../index.html");
