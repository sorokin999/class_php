<?php

namespace App;

use App\Calculator;
use Locator\Locator;
use convertor\Convertor;

class Main
{
    public function run()
    {
        $colorname = new Convertor();
        var_dump($colorname->colorConvert('Grey'));
        var_dump($colorname->colorConvert('grey71'));
        var_dump($colorname->colorConvert('grey61'));
        //$locator = new Locator();
        //var_dump($locator->getByPhone('3532310000'));
        //var_dump($locator->getByIp('8.8.8.8'));
        //var_dump($locator->getByPhone('3532309999'));
    }
}