<?php
$start_keyboard = include 'keyboards/start_keyboard.php';

$text = $t->Text();

if ($text == "/start") {
    $t->sendMessage($chatID, "Assalomu alekum AgroMarzak botiga xush kelibsiz!", $start_keyboard);
}