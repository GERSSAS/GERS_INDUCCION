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
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $fila['usuario']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" id="correo" name="correo" class="form-control" value="<?php echo $fila['correo']; ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="area">Área</label><br>
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
                                <label for="id_rol">Rol de Usuario</label><br>
                                <select name="id_rol" id="id_rol" class="form-control" required>
                                    <option <?php echo $fila['id_rol'] === '1' ? 'selected' : ''; ?> value="1">Empleado</option>
                                </select>
                            </div>
                        </div>
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
                console.log(response);
                if (response) {
                    alert("El registro se ha actualizado correctamente");
                   
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