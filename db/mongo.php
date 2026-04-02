<?php

require 'vendor/autoload.php';

use MongoDB\Client;
use MongoDB\BSON\UTCDateTime;
use MongoDB\BSON\ObjectId;

class MongoDBConnection {
    private $client;
    private $db;

    public function __construct($uri, $dbName) {
        $this->client = new Client($uri);
        $this->db = $this->client->selectDatabase($dbName);
    }

    public function getCollection($collectionName) {
        return $this->db->selectCollection($collectionName);
    }

    public function User($chatID) {
        $collection = $this->getCollection('users');
        return $collection->findOne(['chat_id' => $chatID]);
    }
}