<?php

namespace Shopping\Infrastructure;

use Shopping\Domain\Product;
use Shopping\Domain\ProductRepository;

class DatabaseProductRepository implements ProductRepository
{
    /**
     * @var Database
     */
    private $db;

    /**
     * @param Database $database
     */
    public function __construct(Database $database)
    {
        $this->db = $database;
    }

    public function get(int $productId): Product
    {
        $record = $this->db->query('SELECT * FROM ...');

        // transform $record to Product object somehow...
        $product = new Product('Product loaded from database');

        return $product;
    }
}
