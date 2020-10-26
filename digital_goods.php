<?php

include "goods.php";
class digital_goods extends goods
{
    public $type_license; //Может быть Longlife и subscribtion
    public $price_month; //цена за месяц подписки (subscribtion)
    public $price_long; //цена за пожизненную лицензию (Longlife)
    public $sub_period; // срок подписки
    public function __construct($type_license, $price_long, $sub_period=1, $price_month=null, $count_goods=1) {
        if ($type_license == "longlife"){
            $price_goods = $price_long;
        }
        else {
            $price_goods = $price_month * $sub_period;

        }
        echo "Стоимость цифрового товара равняется ";
      $this->getprice($price_goods,$count_goods);
    }


 public function getprice($price_goods,$count_goods)
{

    $price_goods = $count_goods*$price_goods;
    echo $price_goods;
}
}
$Microsoft = new digital_goods('4',5000, );
//