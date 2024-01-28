<?php

namespace Abstracts;
require __DIR__. "/../Interfaces/SorterInterface.php";
use Interfaces\SorterInterface;

abstract class SorterAbstract implements SorterInterface
{
    /**
     * @param array $product
     * @return array
     */
    public function sortRecord(array $product = []):array
    {
        $data = [];
        try {
            if(count($product)) $data = $product;

        } catch (\Exception $exception) {
            echo $exception->getMessage();
        }
        return $data;
    }
}