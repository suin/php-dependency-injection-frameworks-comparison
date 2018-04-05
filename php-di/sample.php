<?php

use DI\ContainerBuilder;
use Shopping\Application\ProductApplicationService;

require __DIR__ . '/vendor/autoload.php';

// コンテナの設定
$containerBuilder = new ContainerBuilder();
$containerBuilder->useAnnotations(true);
$containerBuilder->useAutowiring(true);
$containerBuilder->addDefinitions(__DIR__ . '/config.php');
$container = $containerBuilder->build();

// コンテナを使う
$productApplicationService = $container->get(ProductApplicationService::class);
$product = $productApplicationService->getProduct(1);
echo $product->getName();
// Output: Product loaded from database
