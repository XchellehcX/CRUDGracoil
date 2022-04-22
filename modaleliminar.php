<!-- Modal -->
<div class="modal fade" id="modal-borrar<?php echo $empleado[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Realmente deseas Eliminar a:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <strong><?php echo $empleado[1]?></strong>
        <form name="form-data" action="usuarios.php" method="POST">
        <input name="accion" type="hidden" value="deleteempleado">
        <input name="id" type="hidden" value="<?php echo $empleado[0];?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>