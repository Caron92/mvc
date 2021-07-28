<?php

// @codingStandardsIgnoreStart

declare(strict_types=1);

namespace char19\DiceTest;

use function Mos\Functions\{
    redirectTo,
    renderView,
    sendResponse,
    url
};

use char19\DiceTest\DiceTest;
use char19\DiceTest\DiceHandTest;


/**
 * Class DiceTest.
 */
class GameTest
{
    public function playGame(): void
    {
        $data = [
            "header" => "DiceTest",
            "message" => "Hey!",
        ];

        $die = new DiceTest();
        $die->roll();

        $diceHandTest = new DiceHandTest();
        $diceHandTest->roll();

        $data["dieLastRoll"] = $die->getLastRoll();
        $data["diceHandRoll"] = $diceHandTest->getLastRoll();

        $diceHandTest->roll();
        $data["diceHandRoll1"] = $diceHandTest->getLastRoll();

        $body = renderView("layout/diceTest.php", $data);

        sendResponse($body);
    }
}
