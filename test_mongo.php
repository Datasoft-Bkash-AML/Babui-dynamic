<?php
// test_mongo.php
require_once __DIR__ . '/application/libraries/Mongo_db.php';
require_once __DIR__ . '/vendor/autoload.php';

$mongo = new Mongo_db();
$collection = $mongo->getCollection('test_collection');

// Insert a test document
$result = $collection->insertOne(['test' => 'mongodb connection successful']);

// Fetch the document
$doc = $collection->findOne(['_id' => $result->getInsertedId()]);

echo "Inserted document: ";
print_r($doc);
