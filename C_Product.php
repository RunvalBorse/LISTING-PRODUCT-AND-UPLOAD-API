<?php
class Product{

    // Connection instance
    private $connection;

    // table name
    private $table_name = "Product";

    // table columns
    public $id;
    public $name;
    public $price;
    public $quantity;
    public $createdAt; 
    public $updatedAt;

    public function __construct($connection){
        $this->connection = $connection;
    }

    //C
    public function create(){
    }
    //R
    public function read(){
        $query = "SELECT p.product_id, p.product_name, p.product_price,p.product_quantity , p.createdAt, p.updatedAt FROM" . $this->table_name . " p ";

        $stmt = $this->connection->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}