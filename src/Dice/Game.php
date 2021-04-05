<?php

declare(strict_types=1);

namespace char19\Dice;

use function Mos\Functions\ {
    redirectTo,
    renderView,
    sendResponse,
    url
};

use char19\Dice\Dice;
use char19\Dice\DiceHand;

/**
 * Class Game
 */
class Game
{
    public function playGame(): void
    {
        $data = [
            "header" => "Dice",
            "message" => "Hey, edit this to do it youreself!",
        ];

        $die = new Dice();
        $die->roll();

        $diceHand = new DiceHand();
        $diceHand->roll();

        $data["dieLastRoll"] = $die->getLastRoll();
        $data["diceHandRoll"] = $diceHand->getLastRoll();

        $body = renderView("layout/dice.php", $data);
        sendResponse($body);
    }
}
