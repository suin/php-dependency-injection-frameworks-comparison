<?php

namespace Shopping\Application;

use Shopping\Domain\Product;
use Shopping\Domain\ProductRepository;

class ProductApplicationService
{
    /**
     * @var ProductRepository
     * @Inject
     */
    private $productRepository;

    public function getProduct(int $productId): Product
    {
        return $this->productRepository->get($productId);
    }
}
