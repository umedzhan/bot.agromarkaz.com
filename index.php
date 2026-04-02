<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

require 'db/mongo.php';
require 'db/mysql.php';
require 'telegram.php';


$t = new Telegram($_ENV['TELEGRAM_BOT_TOKEN']);
$db = new MongoDBConnection($_ENV['MONGODB_URI'], $_ENV['MONGODB_DB']);

$chatID = $t->ChatID();

# test message for checking if bot is working
if ($t->isMessage()) {
    include 'messages/message.php';
}