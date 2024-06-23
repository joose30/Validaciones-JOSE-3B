<?php

//definimos variables
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    if (empty($user) || empty($password) || empty($edad)) {
        echo "Por favor, complete todos los campos";
        exit; //cierra el script si el dato es false
    }

    if (!is_numeric($edad) || $edad < 18) { //is_numeric evalua si "edad" es numerica y sigue con el proceso
        echo "Debe ser mayor de edad (18 años o más)";
        exit;
    }

    if ($user !== 'luis' || $password !== 'mendoza') {
        echo "Tu usuario o contraseña son incorrectos";
        exit;
    }

    echo "Hola: ".$user ." Tu edad es: ".$edad;
} else {
    echo "Porfavor llena los campos solicitados.. ";
}


?>