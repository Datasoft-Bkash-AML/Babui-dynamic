<?php
// application/libraries/Mongo_db.php
require_once __DIR__ . '/../../vendor/autoload.php';

class Mongo_db {
    private $client;
    private $db;

    public function __construct() {
        $config = include(__DIR__ . '/../config/mongodb.php');
        $this->client = new MongoDB\Client($config['host']);
        $this->db = $this->client->{$config['database']};
    }

    public function getCollection($name) {
        return $this->db->{$name};
    }
}
