<div class="modal fade" style="display: none;" id="modaleditaru<?php echo $usuario['id_usu'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Información del Usuario</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="editaru.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                    <label for="nombre"><b>Nombre</b></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>">
                    <label for="ape"><b>Apellido</b></label>
                    <input type="text" name="ape" id="ape" class="form-control" value="<?php echo $usuario['apellido'];?>">
                    </div>
                    <div class="row">
                    <div class="col">
                    <label for="tipo"><b>Tipo de Usuario</b></label>
                    <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $usuario['tipo'];?>">
                    </div> 
                    </div>       
                    <label for="usuario"><b>Usuario</b></label>
                    <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario['usuario'];?>">
                    <div class="row">
                        <div class="col-3">  
                            <center><label for="activo"><b>Activo</b></label></center>
                            <center> <input type="checkbox" name="activo" id="activo" class="form-check-input" value="<?php echo $usuario['activo'];?>"></center>
                        </div> 
                    </div>   
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_usu" id="id_usu" value="<?php echo $usuario['id_usu'];?>">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" class="btn btn-success" value="Guardar Cambios">
                </div>
                <button type="reset" id="limpiar" hidden=""></button>
                </form>
            </div>
        </div>
</div>