<?php
$start_keyboard = include 'keyboards/start_keyboard.php';

$chatID = $t->ChatID();
$text = $t->Text();

if ($text == "/start") {
    Register($chatID, $t->FirstName());
    $page->Set($chatID, 'main');
    $t->sendMessage($chatID, "Assalomu alekum AgroMarzak botiga xush kelibsiz!".$page->Get($chatID), $start_keyboard);
} else {
    $getPage = $page->Get($chatID);
    switch ($getPage) {
        case 'main':
            include __DIR__ . '/pages/main.php';
            break;
        case 'ai_agronom':
            include __DIR__ . '/pages/ai_agronom.php';
            break;
    }
}