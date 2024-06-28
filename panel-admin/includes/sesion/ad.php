<!--useradmin.php-->


<?php include "../includes/hadmin.php"; ?>


<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
                <br>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#user">
                    <span class="glyphicon glyphicon-plus"></span> Agregar usuario <i class="fa fa-user-plus"></i> </a></button>
            </div>
            <?php include "../includes/sesion/registros_admin.php"; ?>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Correo</th>
                                <th>Área</th>
                                <th>Rol</th>
                                <th>Fecha de Modificacion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            require_once("../includes/db.php");
                            $result = mysqli_query($conexion, "SELECT * FROM usuarios ");
                            while ($fila = mysqli_fetch_assoc($result)) :
                            ?>
                                <tr>
                                    <td><?php echo $fila['usuario']; ?></td>
                                    <td><?php echo $fila['correo']; ?></td>
                                    <td><?php echo $fila['area']; ?></td>
                                    <td><?php echo $fila['id_rol']; ?></td>
                                    <td><?php echo $fila['fecha']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo $fila['id']; ?>">
                                            <i class="fa fa-edit "></i>
                                        </button>
                                        <a href="../includes/eliminar_admin.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger btn-del">
                                            <i class="fa fa-trash "></i></a>
                                    </td>
                                </tr>
                                <?php include "editar_admin.php"; ?>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                    <script>
                        $('.btn-del').on('click', function(e) {
                            e.preventDefault();
                            const href = $(this).attr('href')

                            Swal.fire({
                                title: 'Estas seguro de eliminar este registro?',
                                text: "¡No podrás revertir esto!!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Si, eliminar!',
                                cancelButtonText: 'Cancelar!',
                            }).then((result) => {
                                if (result.value) {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Eliminado!',
                                            'El registro fue eliminado.',
                                            'success'
                                        )
                                    }

                                    document.location.href = href;
                                }
                            })

                        })
                    </script>


                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->






    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->




</body>


<?php include "../includes/footer.php"; ?>

</html>

<!--registros_admin.php-->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Agregar nuevo usuario</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" required>

                            </div>
                        </div>


                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Área</label><br>
                                <select name="area" id="area" class="form-control" required>
                                <option >Selecciona una opcion</option>
                                    <option >Administración</option>
                                    <option >Comercial</option>
                                    <option >Diseño e nvertorias</option>
                                    <option >NEPLAN</option>
                                    <option >E. Internacionales</option>
                                    <option >Estudios</option>
                                    <option >PAC</option>
                                    <option >Soluciones Integrales de Equipos</option>
                                    <option >Proyecto GIS</option>
                                    <option >Eficiencia y Calidad</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Contraseña</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Confirmar Contraseña</label><br>
                                <input type="password" name="password2" id="password2" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="username">Roles</label><br>
                                <select name="id_rol" id="id_rol" class="form-control" required>
                                    <option value="">Selecciona una opcion</option>
                                    <option value="1">Empleado</option>

                                </select>
                            </div>
                        </div>
                    </div>




                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="register" name="registrar">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>

<script src="../../package/dist/sweetalert2.all.js"></script>
<script src="../../package/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript">
    $('#register').click(function(e) {
        e.preventDefault();
        var valid = this.form.checkValidity();

        if (valid) {
            var datos = new FormData();
            datos.append('usuario', $('#usuario').val())
            datos.append('correo', $('#correo').val())
            datos.append('area', $('#area').val())
            datos.append('password', $('#password').val())
            datos.append('password2', $('#password2').val())
            datos.append('id_rol', $('#id_rol').val())

            fetch('../includes/sesion/validar_admin.php', {
                method: 'POST',
                body: datos,
            }).then((response) => response.json()).then((response => {
                confirmation(response);
            }))

        }
    });

    function confirmation(r) {
        if (r === 'success') {
            Swal.fire({
                'title': '¡Mensaje!',
                'text': 'Usuario Registrado',
                'icon': 'success',
                'showConfirmButton': 'false',
                'timer': '1500'
            }).then(function() {
                window.location = "useradmin.php";
            });
        }
        if (r === 'error') {
            Swal.fire({
                'title': 'Error',
                'text': 'No se creo el usuario',
                'icon': 'error'
            })
        }
        if (r === 'mail') {
            Swal.fire({
                'title': 'Error',
                'text': 'Este usuario ya esta registrado prueba con otro o inicia sesión',
                'icon': 'error'
            })
        }
        if (r === 'pass') {
            Swal.fire({
                'title': 'Error',
                'text': 'Las contraseñas no coinciden',
                'icon': 'error'
            })
        }


    }
</script>
<!--editar_admin.php-->
<div class="modal fade" id="editar<?php echo $fila['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h3 class="modal-title" id="exampleModalLabel">Editar Usuario</h3>
                <button type="button" class="btn btn-primary" data-dismiss="modal">
                    <i class="fa fa-times" aria-hidden="true"></i></button>
            </div>
            <div class="modal-body">

                <form id="editUser<?php echo $fila['id']; ?>" method="POST">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Usuario</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $fila['usuario']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="password">Área</label><br>
                                <select type="are" name="area" id="area" class="form-control" value="<?php echo $fila['area']; ?>" required>
                                    <option >Selecciona una opcion</option>
                                    <option >Administración</option>
                                    <option >Comercial</option>
                                    <option >Diseño e Invertorias</option>
                                    <option >NEPLAN</option>
                                    <option >E. Internacionales</option>
                                    <option >Estudios</option>
                                    <option >PAC</option>
                                    <option >Soluciones Integrales de Equipos</option>
                                    <option >Proyecto GIS</option>
                                    <option >Eficiencia y Calidad</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="username">Rol de Usuario</label><br>
                                <select name="id_rol" id="id_rol" class="form-control" required>
                                    <option <?php echo $fila['id_rol'] === '1' ? 'selected' : ''; ?> value="1">Empleado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <?php
                    $passrand = rand(1000, 9999);
                    ?>

                    <div class="form-group">
                        <label for="password" style="text-align: justify;">Password: (Es necesario generar una nueva contraseña o la contraseña por defecto es: <i><b>Defaultpass: <?php echo $passrand; ?> </b></i>)</label><br>
                        <input type="password" name="password" id="password" class="form-control" value="Defaultpass<?php echo $passrand; ?>">
                    </div>

                    <input type="hidden" name="accion" value="editar_user">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                    <br>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" onclick="editarUser(<?php echo $fila['id']; ?>)">Guardar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function editarUser(id) {
        var datosFormulario = $("#editUser" + id).serialize();

        $.ajax({
            url: "../includes/functions.php",
            type: "POST",
            data: datosFormulario,
            dataType: "json",
            success: function(response) {
                if (response === "correcto") {
                    alert("El registro se ha actualizado correctamente");
                    setTimeout(function() {
                        window.location.href = ('useradmin.php');
                    }, 2000);
                } else {
                    alert("Ha ocurrido un error al actualizar el registro");
                }
            },
            error: function() {
                alert("Error de comunicación con el servidor");
            }
        });
    }
</script>
<!--eliminar_admin.php-->
<?php

session_start();
error_reporting(0);


	$id = $_GET['id'];
	include "db.php";
	$query = mysqli_query($conexion,"DELETE FROM usuarios WHERE id = '$id'");
	
	header ('Location: ../views/useradmin.php');

?>
<!--validar_admin.php-->
<?php
require_once("../db.php");
if (isset($_POST)) {
    extract($_POST);
    $password = trim($_POST['password']);
    $password2 = trim($_POST['password2']);

    $sql = "SELECT * FROM  usuarios WHERE usuario = '$usuario'";
    $validuser = mysqli_query($conexion, $sql);
    $rows = mysqli_num_rows($validuser);
    if ($rows >= 1) {
        echo json_encode('mail');
        die();
    }
    if (strcmp($password, $password2) !== 0) {
        echo json_encode('pass');
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);

        $consulta = "INSERT INTO usuarios (usuario, correo, area, password, id_rol)
	VALUES ('$usuario', '$correo ', '$area', '$password', '$id_rol')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            echo json_encode('success');
        } else {
            echo json_encode('error');
        }
    }
} else {
    echo 'No data';
}
?>
<!--sesionValidate.php-->

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
                        $response['redirect'] = '../../../view/index.php';
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

<!--fuctions.php-->
<?php

if (isset($_POST['accion'])) {
    switch ($_POST['accion']) {
            //casos de registros

        case 'editar_user':
            editar_user();
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
    $password = trim($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 5]);
    $consulta = "UPDATE users SET usuario = '$usuario', correo = '$correo', password = '$password',
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

//mailer.php//


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dany.pechene@gers.com';                     //SMTP username
    $mail->Password   = '2005Pilarcoqui';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('dany.pechene@gers.com', 'GERS S.A.S');
    $mail->addAddress('pechenecoquitatiana@gmail.com', 'usuario');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Credenciales de usuario';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();
    echo 'Enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}

?>