<?php

// phpcs:ignore

declare(strict_types=1);

namespace char19\DiceTest;

// use function Mos\Functions\{
//     destroySession,
//     redirectTo,
//     renderView,
//     renderTwigView,
//     sendResponse,
//     url
// };

/**
 * Class DiceTest.
 */
class DiceTest
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
