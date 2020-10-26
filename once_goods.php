<?php

include_once "goods.php";
class once_goods extends goods
{
    public $priceonce;
    public function getprice($priceonce,$count_goods)
        {

        $price_goods = $count_goods*$priceonce;
        echo $price_goods;
        }

    public function __construct($priceonce, $count_goods=1) {

        echo "Стоимость штучного товара равняется ";
        $this->getprice($priceonce,$count_goods);

    }

}
$cap = new once_goods(15,5 );
//