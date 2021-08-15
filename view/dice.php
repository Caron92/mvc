<?php

/**
 * Standard view template to generate a simple web page, or part of a web page.
 */

declare(strict_types=1);

$header = $header ?? null;
$message = $message ?? null;



?><h1><?= $header ?></h1>

<p><?= $message ?></p>
<input type="number" min="1" max="100" id="numberOfSides">
<button type="button" onclick="dice_sides();">Throw Dice</button>

<p id="messageSides"></p>

<!-- <p><?= $diceHandRoll ?></p> -->

<script type=" text/javascript" src="http://www.student.bth.se/~char19/dbwebb-kurser/mvc/me/game/src/js_functions/dice_functions.js"></script>
/dbwebb/mvc/me/game/src/js_functions/dice_functions.js

