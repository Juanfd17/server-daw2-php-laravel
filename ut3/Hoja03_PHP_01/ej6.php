<?php
    $n1 = 1;
    $n2 = 2;

    for ($i = 0; $i < 10; $i++) {
        echo $n1 ."/". $n2 ."<br>";
        $n1 += 1;
        $n2 *= 2;
    }
?>