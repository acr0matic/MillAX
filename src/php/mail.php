<?php
$name = $_POST['user_name'];
$patient_name = $_POST['patient_name'];
$phone = $_POST['user_phone'];
$message = $_POST['user_message'];
$screenshot = $_POST['screenshot'];

$teethData = json_decode(trim($_POST['teethData']), true);
$content =
  "ФИО заказчика: "       . $name .
  " ФИО пациента: "       . $patient_name .
  " Контактный телефон: " . $phone .
  " Сообщение: "          . $message .
  " Данные:"              . json_encode($teethData);

$aExtraInfo = getimagesize($_FILES['screenshot']['tmp_name']);
$screenshotURL = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['screenshot']['tmp_name']));
echo json_encode($content);
