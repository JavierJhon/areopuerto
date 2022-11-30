<legend class="text-center"><i class="glyphicon glyphicon-plus"></i>
  <b>
  NUEVA AEROLINEA</b>
</legend>
<hr>



<form class="" action="<?php echo site_url('aerolineas/guardarAerolinea'); ?>" method="post">\

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_aer" value="" class="form-control" placeholder="Ingrese nombre" required>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO: </label>
    </div>
    <div class="col-md-7">
      <input type="number" name="telefono_aer" value="" class="form-control" placeholder="Ingrese telefono" required>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CORREO: </label>
    </div>
    <div class="col-md-7">
      <input type="text" name="correo_aer" value="" class="form-control" placeholder="Ingrese"required>
    </div>
  </div>
<br>

  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NUMERO DE AVIONES: </label>
    </div>
    <div class="col-md-7">
      <input type="number" name="numavion_aer" value="" class="form-control" placeholder="Ingrese">
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
