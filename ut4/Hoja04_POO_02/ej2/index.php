<?php
    require_once ("Familia.class.php");
    require_once ("Urgencia.class.php");
    $objetos = [
        new Familia(4, "Medico1", 30, Turno::manana),
        new Familia(1, "Medico2", 40, Turno::tarde),
        new Familia(5, "Medico3", 35, Turno::manana),
        new Urgencia("Urgencia1", "Medico4", 45, Turno::manana),
        new Urgencia("Urgencia2", "Medico5", 40, Turno::tarde),
        new Urgencia("Urgencia3", "Medico6", 65, Turno::tarde)
    ];

    echo ("<h1>Medicos</h1>");
    foreach ($objetos as $objeto) {
        echo ("<p>".$objeto."</p>");
    }

    echo ("<h1>Mostrar el número de médicos de turno de tarde de urgencias tienen más de 60 años.</h1>");
    $contadorMedicos1 = 0;
    foreach ($objetos as $objeto) {
        if ($objeto instanceof Urgencia and $objeto->getEdad() > 60 and $objeto->getTurno() == "tarde"){
            $contadorMedicos1++;
        }
    }
    echo "<p>".$contadorMedicos1."</p>";

    echo ("<h1>Formulario para nº pacientes de las familias</h1>");
?>
    <form action="#" method="post">
        <label for="nPacientes">Numero de pacientes:
            <input type="number" name="nPacientes">
        </label>
        <button type="submit">Enviar</button>
    </form>

<?php
    if (isset($_POST["nPacientes"])){
        foreach ($objetos as $objeto) {
            if ($objeto instanceof Familia and $objeto->getNumPacientes() >= $_POST["nPacientes"]){
                echo ("<p>".$objeto."</p>");
            }
        }
    }
?>