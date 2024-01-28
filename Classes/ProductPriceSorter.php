<?php

namespace Classes;

include_once __DIR__ . "/../Abstracts/SorterAbstract.php";

use Abstracts\SorterAbstract;
use Utils\Utils;

class ProductPriceSorter extends SorterAbstract
{
    /** sort products by prices
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            if(count($product)) $data = Utils::sortProductsByContext($product);

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}