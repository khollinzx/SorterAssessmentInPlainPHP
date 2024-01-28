<?php

require __DIR__ . "/Classes/ProductPriceSorter.php";
require __DIR__ . "/Classes/ProductSalesPerViewSorter.php";
require __DIR__ . "/Classes/Catalog.php";
use Classes\Catalog;
use Classes\ProductPriceSorter;
use Classes\ProductSalesPerViewSorter;

//$ProductPriceSorter = new \Classes\ProductPriceSorter();
//$ProductSalesPerViewSorter= new \Classes\ProductSalesPerViewSorter();
//$Catalog = new \Classes\Catalog($this->product);
Class Server {

    public function __construct()
    {}

    public array $product = [
        [
            'id' => 1,
            'name' => 'Alabaster Table',
            'price' => 12.99,
            'created' => '2019-01-04',
            'sales_count' => 32,
            'views_count' => 730,
        ],
        [
            'id' => 2,
            'name' => 'Zebra Table',
            'price' => 44.49,
            'created' => '2012-01-04',
            'sales_count' => 301,
            'views_count' => 3279,
        ],
        [
            'id' => 3,
            'name' => 'Coffee Table',
            'price' => 10.00,
            'created' => '2014-05-28',
            'sales_count' => 1048,
            'views_count' => 20123,
        ]
    ];

    public function execute(): void
    {
        $productPriceSorter = new ProductPriceSorter();
        $productSalesPerViewSorter = new ProductSalesPerViewSorter();
        $Catalog = new Catalog($this->product);

        $productsSortedByPrice = $Catalog->getProducts($productPriceSorter);
        $productsSortedBySalesPerView = $Catalog->getProducts($productSalesPerViewSorter);

        print_r($productsSortedByPrice);
        print_r($productsSortedBySalesPerView);
    }

}

$code = new Server();
$code->execute();
