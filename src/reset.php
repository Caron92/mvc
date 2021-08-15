<?php

    // Update the score
    $file = fopen("score.txt", "w") or die("Unable to open file!") ;
    fwrite($file, "0/0");
    fclose($file);

    // Skciak tillbaka användaren till scoreboard i servern
    header("Location: http://www.student.bth.se/~char19/dbwebb-kurser/mvc/me/game/src/printResult.php");
?>