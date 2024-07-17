<?php
require_once("../db.php");

header('Content-Type: application/json');

$response = array();

if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Primera consulta a la tabla 'users'
    $sql = "SELECT * FROM users WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['id_rol'] = $row['id_rol'];

                // Devolver una respuesta JSON con la redirección
                if ($row['id_rol'] == 1) {
                    $response['status'] = 'success';
                    $response['redirect'] = '../../views/usuarios.php';
                } elseif ($row['id_rol'] == 2) {
                    $response['status'] = 'success';
                    $response['redirect'] = '../../views/useradmin.php';
                } elseif ($row['id_rol'] == 3) {
                    $response['status'] = 'success';
                    $response['redirect'] = '../../../view/index.php';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Rol no definido';
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Contraseña incorrecta';
            }
        } else {
            // Si no se encuentra en 'users', consultar en 'usuarios'
            $sql2 = "SELECT * FROM usuarios WHERE usuario = ?";
            $stmt2 = $conexion->prepare($sql2);
            if ($stmt2) {
                $stmt2->bind_param("s", $usuario);
                $stmt2->execute();
                $result2 = $stmt2->get_result();

                if ($result2->num_rows == 1) {
                    $row2 = $result2->fetch_assoc();
                    if (password_verify($password, $row2['password'])) {
                        session_start();
                        $_SESSION['usuario'] = $row2['usuario'];
                        $_SESSION['id_rol'] = $row2['id_rol'];

                        // Devolver una respuesta JSON con la redirección
                        $response['status'] = 'success';
                        $response['redirect'] = '../includes/sesion/login.php';
                    } else {
                        $response['status'] = 'error';
                        $response['message'] = 'Contraseña incorrecta';
                    }
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Usuario no encontrado';
                }
            } else {
                $response['status'] = 'error';
                $response['message'] = 'Error en la consulta a la base de datos';
            }
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error en la consulta a la base de datos';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Datos no enviados correctamente';
}

echo json_encode($response);
?>