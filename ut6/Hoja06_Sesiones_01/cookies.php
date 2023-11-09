<?php
    if (isset($_COOKIE["ultimoLogin"])){
        echo "Tu ultimo login fue el " . $_COOKIE["ultimoLogin"];
    } else{
        echo "Este es tu primer visita";
    }

    setcookie("ultimoLogin", date('d/m/Y H:i:s'), time() + 60);
?>