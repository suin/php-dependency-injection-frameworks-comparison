<?php

use function DI\autowire;
use Shopping\Domain\ProductRepository;
use Shopping\Infrastructure\DatabaseProductRepository;

return [
    ProductRepository::class => autowire(DatabaseProductRepository::class),
];
