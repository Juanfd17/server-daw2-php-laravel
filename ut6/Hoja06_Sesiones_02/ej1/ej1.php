<?php
session_start();

if (isset($_SESSION["veces"])){
    $_SESSION["veces"]++;
} else{
    $_SESSION["veces"] = 1;
}

echo "Has visitado la pagina $_SESSION[veces]"

?>

<form method="post" action="#">
    <input type="submit" name="logoff" value="Log auth" />
</form>

<?php
    if (isset($_POST["logoff"])){
        session_destroy();
    }
?>