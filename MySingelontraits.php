<?php

trait MyFirstTrait {

    private static $instances = [];
    public static function single()
    {
        if (!isset(self::$instances[static::class]))
        {
            self::$instances[static::class] = new static;
        }

        return self::$instances[static::class];
    }
}

class Test
{
    use MyFirstTrait;

    public $value = 0;
}
$a = Test::single();
echo $a->value;
$a->value = 5;
echo $a->value;
$b = Test::single();
echo $b->value;
$d = Test::single();
$d->value = 'banan';
$c = Test::single();
echo $c->value;
///