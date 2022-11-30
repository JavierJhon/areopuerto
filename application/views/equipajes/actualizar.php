<div class="row">
  <div class="col-md-12 text-center well">
    <h3>ACTUALIZAR EQUIPAJES</h3>
  </div>

  <form class="" action="<?php echo site_url('aerolineas/procesarActualizacion'); ?>" method="post">
    <center>
      <input type="hidden" name="id_equ" value="<?php echo $equipajeEditar->id_aer; ?>">
    </center>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">COLOR: </label>
      </div>
      <div class="col-md-7">
        <input type="number" name="color_equ" value="<?php echo $equipajeEditar->color_equ; ?>" class="form-control" placeholder="Ingrese numero de equipaje" required>
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">TELEFONO: </label>
      </div>
      <div class="col-md-7">
        <input type="number" name="telefono_aer" value="<?php echo $aerolineaEditar->telefono_aer; ?>" class="form-control" placeholder="Ingrese telefono" required>
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">CORREO: </label>
      </div>
      <div class="col-md-7">
        <input type="text" name="correo_aer" value="<?php echo $aerolineaEditar->correo_aer; ?>" class="form-control" placeholder="Ingrese"required>
      </div>
    </div>
  <br>

    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">NUMERO DE AVIONES: </label>
      </div>
      <div class="col-md-7">
        <input type="text" name="numavion_aer" value="<?php echo $aerolineaEditar->numavion_aer; ?>" class="form-control" placeholder="Ingrese">
      </div>
    </div>
  <br>

    <br><br>
    <div class="row">
      <div class="col-md-4">

      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-primary">
          <i class="glyphicon glyphicon-ok"></i>
          GUARDAR
        </button>
        <a href="<?php echo site_url('aerolineas/index') ?>" class="btn btn-danger">
          <i class="glyphicon glyphicon-remove-circle"></i>
          CANCELAR
        </a>
      </div>

    </div>
  </form>
