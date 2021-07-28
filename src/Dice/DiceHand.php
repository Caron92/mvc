<?php
namespace char19\DiceHand;

declare(strict_types=1);



/**
 * Class DiceHand.
 */
class DiceHand
{

    private array $dices;
    private int $sum;
// @codingStandardsIgnoreStart
    public function __construct()
    {
        for ($i = 0; $i <= 3; $i++) {
           // $this->dices[$i] = new Dice();
        }
    }

    public function roll(): void
    {
        $len = count($this->dices);

        $this->sum = 0;
        for ($i = 0; $i <= 3; $i++) {
            $this->sum += $this->dices[$i]->roll();
        }
    }

    public function getLastRoll(): string
    {
        $res = "";
        for ($i = 0; $i <= 3; $i++) {
            $res .= $this->dices[$i]->getLastRoll() . ", ";
        }
        return $res . " = " . $this->sum;
    }
} 
