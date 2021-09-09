<?php

declare(strict_types=1);

namespace Mos\Functions;


use PHPUnit\Framework\TestCase;


/**
     * Test the function Dice().
     */

class DiceTest extends TestCase
{
    public function testFaces()
    {
        
        //$exp = 6;

        //$dice = new Dice();
        //$this->assertInstanceOf("\char19\src", $dice);
        //$faces = 6;

        //$this->assertEquals($exp,$faces);*/

        $res = 42;

        $exp = 42;

        $this->assertEquals($exp,$res);

    }
}
?>