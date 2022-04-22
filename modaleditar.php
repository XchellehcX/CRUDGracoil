<!-- Modal -->
<div class="modal fade" id="modal-actualizar<?php echo $empleado[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        
    <div class="modal-header" style="background-color: #563d7c !important;">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
       
      </div>


      <form method="POST" action="usuarios.php">
            <input type="hidden" name="accion" value="editarempleado">
            <input type="hidden" name="id" value="<?php echo $empleado[0]; ?>">

            <div class="modal-body" id="cont_modal">

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nombre:</label>
                  <input type="text" name="nombre" class="form-control" value="<?php echo $empleado[1]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Puesto:</label>
                  <input type="text" name="puesto" class="form-control" value="<?php echo $empleado[2]; ?>" required="true">
                </div>
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Ubicacion:</label>
                  <input type="text" name="ubicacion" class="form-control" value="<?php echo $empleado[3]; ?>" required="true">
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->