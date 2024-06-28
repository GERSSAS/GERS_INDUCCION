<?php

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros

        case 'editar_user':
            editar_admin();
            break;

            case 'editar_admin':
                editar_admin();
                break;

        case 'editar_perfil':
            editar_perfil();
            break;
    }
}



function insertar_inventario()
{
    global $conexion;
    extract($_POST);
    include "db.php";

    // Obtener los datos del archivo enviado
    $imagen = $_FILES['imagen']['tmp_name'];
    $basename = basename($_FILES['imagen']['name']);
    $image_ruta = "../img/productos/" . $basename;

    // $imagen_contenido = file_get_contents($imagen);

    // Escapar el contenido binario para evitar problemas de SQL Injection
    // $imagen_contenido = mysqli_real_escape_string($conexion, $imagen_contenido);

    $resultado = false;

    if (move_uploaded_file($imagen, $image_ruta)) {
        $consulta = "INSERT INTO inventario (codigo, imagen, producto, existencia, minimo, venta, compra, unidad, id_categoria) 
    VALUES ('$codigo', '$basename', '$producto', '$existencia', '$minimo', '$venta', '$compra', '$unidad', '$id_categoria')";

        $resultado = mysqli_query($conexion, $consulta);
    };

    if ($resultado) {
        $response = array(
            'status' => 'success',
            'message' => 'Los datos se guardaron correctamente'
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Ocurrió un error inesperado'
        );
    }

    echo json_encode($response);
}




function editar_user()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo',
		area='$area', id_rol='$id_rol' WHERE id = '$id'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode( $resultado);
    } else {
        echo json_encode( $resultado);
    }
}

function editar_admin()
{
    require_once("db.php");
    extract($_POST);
    $consulta = "UPDATE usuarios SET usuario = '$usuario', correo = '$correo',
		area='$area', id_rol='$id_rol' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo json_encode("correcto");
    } else {
        echo json_encode("error");
    }
}

function editar_perfil()
{
    include "db.php";
    extract($_POST);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo' WHERE id = '$id' ";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado === true) {
        echo json_encode("updated");
    }
    if ($resultado === false) {
        echo json_encode("error");
    }
}

function generateRandomPassword($length = 12) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
    $charactersLength = strlen($characters);
    $randomPassword = '';
    for ($i = 0; $i < $length; $i++) {
        $randomPassword .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomPassword;
}