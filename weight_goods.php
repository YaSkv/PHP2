<?php

include_once "goods.php";
class weight_goods
{
    public $weight_goods;
    public $price_kg;
    public function getprice($price_kg,$weight_goods)
    {

        $price_goods = $price_kg*$weight_goods;
        echo $price_goods;
    }

    public function __construct($price_kg, $weight_goods) {

        echo "Стоимость весового товара равняется ";
        $this->getprice($price_kg,$weight_goods);

    }
}
$potato = new weight_goods(100, 0.5);
//