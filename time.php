<?php
$hour =  date( 'H', time() );
$minut = date( 'i', time() );
//var_dump($hour);
//var_dump($minut);

    if ($hour >= 5 && $minut >= 0 && $hour <= 10 && $minut <= 59){
        echo 'Good morning';
    }

    if ($hour >= 11 && $minut >= 0 && $hour <= 16 && $minut <= 59){
        echo 'Good day';
    }
    if ($hour >= 17 && $minut >= 0 && $hour <= 21 && $minut <= 59){
        echo 'Good evening';
    }
    if (($hour >= 22 && $minut >= 0 && $hour <= 23 && $minut <= 59) || ($hour >= 0 && $minut >= 0 && $hour <= 4 && $minut <= 59)){
        echo 'Night - go to sleep';
    }


