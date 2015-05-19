<?php
    function rectangle($a , $b){
        return $a * $b;
    }

    echo 'Area of a rectangle:'. rectangle(5,7);
    echo "<br>";


    function roundd($r){
        return round(pi() *$r *$r, 2);
    }
    echo 'Area of a circle:'.roundd(7);
    echo "<br>";

    function triangle($a , $h){
        return  1/2 *$a * $h;
    }
    echo 'Area of a rectangle ver1:'.triangle(4, 6);
    echo "<br>";

    function triangle1($a , $b, $alfa){
        return 1/2 *$a * $b * round(sin($alfa));
    }
    echo 'Area of a rectangle ver2:'.triangle1(4, 2, 90);
    echo "<br>";

    function triangle2($a , $b, $c){
        $p = 1/2*($a + $b + $c);
        $s = sqrt($p*($p - $a)*($p - $b)*($p - $c));
        return round($s, 2);
    }
    echo 'Area of a rectangle ver3:'. triangle2(4, 2, 5);
    echo "<br>";

    function trapez($a , $b, $h){
        return 1/2 *($a + $b)* $h;
    }
    echo 'Area of the trapezoid:'.trapez(3, 5, 4);
    echo "<br>";

    function parallelogram($a , $h){
        return $a * $h;
    }
    echo 'Area of the parallelogram:'.parallelogram(3, 5);
    echo "<br>";

    function romb($d1 , $d2){
        return 1/2 * $d1 * $d2;
    }
    echo 'Area of the romb:'.romb(3, 5);
    echo "<br>";