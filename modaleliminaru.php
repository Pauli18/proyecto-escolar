<div class="modal fade" style="display: none;"  id="modaleliminaru<?php echo $usuario['id_usu'];?>" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="row">
                <div class="col-11">
                      <h5 class="modal-title" id="exampleModalLabel"><center>¿Estas seguro? <br>Se eliminará a: <?php echo $usuario['nombre'];?><br><br></center></h5>                    
                    </div>
                <div class="col-1">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="modal-body"><center>Selecciona "Eliminar" para borrarlo(a) de la base de datos.</center></div>
        <div class="modal-footer">
<form method="post" action="eliminau.php">
<input hidden type="text" name="id_usu" id="id_usu" value="<?php echo $usuario['id_usu'];?>">
        <input type="submit" class="btn btn-danger" value="Eliminar">
</form>
        </div>
    </div>
</div>
</div>