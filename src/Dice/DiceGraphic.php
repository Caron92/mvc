<?php

declare(strict_types=1);

namespace char19\Dice;

// use function Mos\Functions\{
//     destroySession,
//     redirectTo,
//     renderView,
//     renderTwigView,
//     sendResponse,
//     url
// };

/**
 * Class Dice.
 */
// class Dice
// {
//     const FACES = 6;
//
//     private ?int $roll = null;
//
//     public function roll(): int
//     {
//         $this->roll = rand(1, self::FACES);
//
//         return $this->roll;
//     }
//
//     public function getLastRoll(): int
//     {
//
//         return $this->roll;
//     }
// }


/**
 * A graphic dice.
 */
class DiceGraphic extends Dice
 {
     // /**
     //  * @var integer SIDES Number of sides of the Dice.
     //  */
     // const SIDES = 6;
     //
     // /**
     //  * Constructor to initiate the dice with six number of sides.
     //  */
     // public function __construct()
     // {
     //     parent::__construct(self::SIDES);
     // }

    public function graphic()
    {
    return "dice-" . $this->getLastRoll();
        // return "dice-" . $this->lastRoll;
    }
}
