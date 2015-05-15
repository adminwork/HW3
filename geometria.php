<?php
    function rectangle($a , $b){
        $s = $a * $b;
        echo 'Area of a rectangle:'. $s;
        echo "<br>";
    }
     rectangle(5,7);

    function roundd($r){
        $s = pi() *$r *$r;
        echo 'Area of a circle:'. round($s, 2);
        echo "<br>";
    }
    roundd(7);

    function triangle($a , $h){
        $s = 1/2 *$a * $h;
        echo 'Area of a rectangle ver1:'. $s;
        echo "<br>";
    }
    triangle(4, 6);

    function triangle1($a , $b, $alfa){
        $s = 1/2 *$a * $b * round(sin($alfa));
        echo 'Area of a rectangle ver2:'. $s;
        echo "<br>";
    }
    triangle1(4, 2, 90);

    function triangle2($a , $b, $c){
        $p = 1/2*($a + $b + $c);
        $s = sqrt($p*($p - $a)*($p - $b)*($p - $c));
        echo 'Area of a rectangle ver3:'. $s;
        echo "<br>";
    }
    triangle2(4, 2, 5);

    function trapez($a , $b, $h){
    $s = 1/2 *($a + $b)* $h;
    echo 'Area of the trapezoid:'. $s;
    echo "<br>";
}
trapez(3, 5, 4);

    function parallelogram($a , $h){
        $s = $a * $h;
        echo 'Area of the parallelogram:'. $s;
        echo "<br>";
    }
parallelogram(3, 5);

    function romb($d1 , $d2){
        $s = 1/2 * $d1 * $d2;
        echo 'Area of the romb:'. $s;
        echo "<br>";
    }
    romb(3, 5);
