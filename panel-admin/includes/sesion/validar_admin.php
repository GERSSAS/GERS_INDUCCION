<?php
require_once("../db.php");
require_once("../functions.php");
require '../../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

if (isset($_POST)) {
    // Verificación de las variables que esten definidas
    $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
    $correo = isset($_POST['correo']) ? $_POST['correo'] : null;
    $area = isset($_POST['area']) ? $_POST['area'] : null;
    $id_rol = isset($_POST['id_rol']) ? $_POST['id_rol'] : null;

    if (!$usuario || !$correo || !$area || !$id_rol) {
        echo json_encode(['error' => 'Faltan datos']);
        exit();
    }

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $validuser = mysqli_query($conexion, $sql);
    $rows = mysqli_num_rows($validuser);
    if ($rows >= 1) {
        echo json_encode('mail');
        exit();
    }

    // Generación contraseña aleatoria
    $password = generateRandomPassword();
    $passwordHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);

    $consulta = "INSERT INTO usuarios (usuario, correo, area, password, id_rol)
                 VALUES ('$usuario', '$correo', '$area', '$passwordHash', '$id_rol')";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->SMTPDebug = 0;                      // Habilitar salida de depuración (0 = deshabilitado, 1 = errores y mensajes, 2 = mensajes solo)
            $mail->isSMTP();                                            // Usar SMTP
            $mail->Host       = 'smtp.gmail.com';                     // Configurar el servidor SMTP para enviar a través de Gmail
            $mail->SMTPAuth   = true;                                   // Habilitar autenticación SMTP
            $mail->Username   = 'dany.pechene@gers.com';                     // Nombre de usuario SMTP
            $mail->Password   = '2005Pilarcoqui';                               // Contraseña SMTP
            $mail->SMTPSecure = 'ssl';            // Habilitar cifrado TLS implícito
            $mail->Port       = 465;                                    // Puerto TCP para conectar; usa 587 si has configurado SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

            // Configurar el remitente y el destinatario
            $mail->setFrom('dany.pechene@gers.com', 'GERS S.A.S');
            $mail->addAddress($correo, $usuario);     // Añadir un destinatario

            // Contenido del correo
            $mail->isHTML(true);                                  // Establecer el formato de correo a HTML
            $mail->Subject = 'Credenciales de usuario';
            $mail->Body    = "Hola $usuario,<br><br>Tu registro ha sido exitoso. Tu usuario es: <b>$usuario</b> Tu contraseña es: <b>$password</b><br><br>Saludos,<br>El equipo de administración";

            $mail->send();
            echo json_encode('success');
        } catch (Exception $e) {
            echo json_encode(['error' => "Error al enviar: {$mail->ErrorInfo}"]);
        }
    } else {
        echo json_encode('error');
    }
} else {
    echo json_encode(['error' => 'No data']);
}
?>