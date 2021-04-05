<?php
declare(strict_types=1);

namespace char19\Dice;

$header = $header ?? null;
?><h1><?= $header ?></h1>


<?php
/**
 * Throw some graphic dices.
 */
include(__DIR__ . "/config\bootstrap.php");
include(__DIR__ . "/autoload_namespace.php");



$dice = new DiceGraphic();
$res = [];
for ($i = 0; $i < 6; $i++) {
    $res[] = $dice->roll();
}

?><h1>Rolling six graphic dices</h1>
<INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">
<button type="button" onclick="location.href='index_dicegraphic.php';">Throw Dice</button>



<?php
$dice = new DiceGraphic();
$rolls = 6;
$res = [];
$class = [];
for ($i = 0; $i < $rolls; $i++) {
    $res[] = $dice->roll();
    $class[] = $dice->graphic();
}
?>
<p><?= implode(", ", $res) ?></p>
<p>Sum is: <?= array_sum($res) ?>.</p>
<p>Average is: <?= round(array_sum($res) / 6, 1) ?>.</p>

<!doctype html>
<meta charset="utf-8">
<link rel="stylesheet" href="htdocs\css\style.css">
<!-- <h1>Rolling <?= $rolls ?> graphic dices</h1> -->

<p class="dice-utf8">
<?php foreach ($class as $value) : ?>
    <i class="<?= $value ?>"></i>
<?php endforeach; ?>
</p>
