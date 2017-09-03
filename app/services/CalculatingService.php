<?php
use Phalcon\Db\Column;
/**
 * Class CalculatingService
 * Простой класс, являющий собой сервис.
 */
class CalculatingService
{
    /**
     * @param $arrProducts
     * @return int 
     */
    public function countProducts($arrProducts)
    {
        return count($arrProducts);
    }
    
}