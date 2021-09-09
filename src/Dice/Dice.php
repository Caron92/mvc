<?php

// @codingStandardsIgnoreStart

declare(strict_types=1);

namespace char19\Dice;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;


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

 
class Dice
{
    const FACES = 6;

    private ?int $roll = null;

    public function roll(): int
    {
        $this->roll = rand(1, self::FACES);

        return $this->roll;
    }

    public function getLastRoll(): int
    {

        return $this->roll;
    }
}
?>