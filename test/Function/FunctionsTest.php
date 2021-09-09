<?php

declare(strict_types=1);

namespace Mos\Functions;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{

    /**
     * Test the function destroySession().
     * @runInSeparateProcess
     */
    public function testDestroySession()
    {

        $diceOjb = new Dice();
        
        $vari = $diceOjb->roll();

        session_start();

        $_SESSION = [
            "key" => "value"
        ];

        destroySession();
        $this->assertEmpty($_SESSION);
    }
}
?>