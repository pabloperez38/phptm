<?php

if (isset($_POST['form']) && $_POST['form'] == 'login') {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $pin = $_POST["pin"];

    if ($usuario == "user" && $password == 123 && $pin == 456) {

        header("Location:home.php");
    } else {

        header("Location:index.php?error=1");
    }
}

if (isset($_POST['form']) && $_POST['form'] == 'carta') { ?>

    <h4>Hola, esta es mi presentacion, mi nombre es <?php echo  $_POST["nombre"] . " " . $_POST["apellido"]; ?> dirección <?php echo  $_POST["direccion"] . " " . $_POST["numero"]; ?> y teléfono <?php echo $_POST["telefono"]; ?> </h4>

<?php }

if (isset($_POST['form']) && $_POST['form'] == 'arreglos') {

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    if ($usuario == "usuario" && $password == 1234) {

        header("Location:home2.php");
    } else {

        header("Location:arreglos.php?error=1");
    }
}
