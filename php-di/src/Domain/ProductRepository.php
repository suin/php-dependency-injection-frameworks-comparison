<?php

namespace Shopping\Domain;

interface ProductRepository
{
    public function get(int $productId): Product;
}
