<?php

    if(isset($_POST['save']))
    {
        $winner = $_POST['winner'];

        // Reads the score
        $file = fopen("score.txt", "r") or die("Unable to open file!") ;
        $score = fgets($file);
        fclose($file);

        $score_array = explode("/", $score);
        if ($winner == 0)
        {
            $score_array[0]++;
        }
        else{
            $score_array[1]++;
        }

        // Update the score
        $file = fopen("score.txt", "w") or die("Unable to open file!") ;
        $result = $score_array[0] . '/' . $score_array[1];
        fwrite($file, $result);
        fclose($file);

        //echo '<script>alert("saved")</script>';
        header("Location: http://www.student.bth.se/~char19/dbwebb-kurser/mvc/me/game/htdocs/twig");
    }
?>

