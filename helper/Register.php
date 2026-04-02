<?php 

function Register($chat_id, $name) {
    global $conn;

    $stmt = $conn->prepare("INSERT IGNORE INTO users (chat_id, name) VALUES (?, ?)");
    $stmt->bind_param("ss", $chat_id, $name);
    $stmt->execute();
    $stmt->close();
}