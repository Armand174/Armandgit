<?php

namespace tests;

require_once __DIR__."/../src/Dates.php";

require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../vendor/phpunit/phpunit/src/Framework/TestCase.php";

use PHPUnit\Framework\TestCase;

final class DatesTest extends TestCase
{
    public function testdemain()
    {
        $date=new \UPJV\Dates();
        $dem=$date->demain();
        $dat=date('d-m-Y',strtotime('+1day'));
        $res=json_encode(['demain'=>$dat]);
        self::assertEquals($dem,$res);
    }
}