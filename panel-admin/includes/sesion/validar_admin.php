<?php
require_once("../db.php");
require_once("../functions.php");

if (isset($_POST)) {
    extract($_POST);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $validuser = mysqli_query($conexion, $sql);
    $rows = mysqli_num_rows($validuser);
    if ($rows >= 1) {
        echo json_encode('mail');
        die();
    }

    // Generar contraseña aleatoria
    $password = generateRandomPassword();
    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);

    $consulta = "INSERT INTO usuarios (usuario, correo, area, password, id_rol)
                 VALUES ('$usuario', '$correo', '$area', '$passwordHash', '$id_rol')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        // Enviar correo electrónico con la contraseña generada
        $to = $correo;
        $subject = "Registro exitoso - Tu contraseña";
        $message = "Hola $usuario,\n\nTu registro ha sido exitoso. Tu contraseña es: $password\n\nSaludos,\nEl equipo de administración";
        $headers = "From: pechenecoquitatiana@gmail.com"; // Reemplaza con tu dirección de correo electrónico

        if (mail($to, $subject, $message, $headers)) {
            echo json_encode('success');
        } else {
            echo json_encode('error');
        }
    } else {
        echo json_encode('error');
    }
} else {
    echo 'No data';
}
?>