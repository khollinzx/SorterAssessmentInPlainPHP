<?php

namespace Classes;
include_once __DIR__ . "/../Abstracts/SorterAbstract.php";
include_once __DIR__ . "/../Utils/Utils.php";

use Abstracts\SorterAbstract;
use Utils\Utils;

class ProductSalesPerViewSorter extends SorterAbstract
{
    /** sort products by views
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            if(count($product)) $data = Utils::sortProductsByContext($product, "Views");

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}