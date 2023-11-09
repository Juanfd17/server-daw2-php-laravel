<form method="post" action="#">
    <input type="submit" name="logoff" value="Log auth" />
</form>

<?php
session_start();
if (isset($_POST["logoff"])){
    session_destroy();
}
?>


<?php

if (isset($_SESSION["horas"])){
    array_push($_SESSION["horas"],  date('d/m/Y H:i:s'));
} else{
    $_SESSION["horas"] = [date('d/m/Y H:i:s')];
}

echo "Has visitado la pagina a las:";
print_r($_SESSION["horas"]);
?>