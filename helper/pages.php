<?php

class Page
{
    private $conn;

    // constructor
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function Get($chat_id)
    {
        $stmt = $this->conn->prepare("SELECT page FROM users WHERE chat_id = ?");
        $stmt->bind_param("s", $chat_id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_assoc()['page'] ?? null;
    }

    public function Set($chat_id, $page)
    {
        $stmt = $this->conn->prepare("UPDATE users SET page = ? WHERE chat_id = ?");
        $stmt->bind_param("ss", $page, $chat_id);
        $stmt->execute();
        $stmt->close();
    }
}