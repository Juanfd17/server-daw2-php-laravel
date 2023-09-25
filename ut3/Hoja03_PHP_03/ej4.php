<?php
    echo "<table>";
    foreach ($_SERVER as $variable => $valor){
        echo "<tr><td>".$variable."</td><td>".$valor."</td></tr>";
    }

    echo "</table>"
?>