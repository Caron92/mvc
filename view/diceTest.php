<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);


$header = $header ?? null;
$message = $message ?? null;



?><h1><?= $header ?></h1>

<p><?= $message ?></p>
<button type="button" onclick="window.location.reload();return false;">Throw Dice</button>


<p>Dice Hand!!!</p>

<p><?= $diceHandRoll ?></p>
