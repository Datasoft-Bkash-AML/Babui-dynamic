<?php
// application/models/Product_model.php
require_once __DIR__ . '/../libraries/Mongo_db.php';

class Product_model {
    private $collection;

    public function __construct() {
        $mongo = new Mongo_db();
        $this->collection = $mongo->getCollection('products');
    }

    public function create($data) {
        $result = $this->collection->insertOne($data);
        return $result->getInsertedId();
    }

    public function getAll($filter = []) {
        return $this->collection->find($filter)->toArray();
    }

    public function getById($id) {
        return $this->collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }

    public function update($id, $data) {
        $this->collection->updateOne([
            '_id' => new MongoDB\BSON\ObjectId($id)
        ], ['$set' => $data]);
    }

    public function delete($id) {
        $this->collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    }
}
