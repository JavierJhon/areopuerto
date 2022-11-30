<div class="row">
  <div class="col-md-12 text-center well">
        <h3>ACTUALIZAR DEPARTAMENTO</h3>
  </div>
</div>
<br>
<div class="'row'">
  <div class="col-md-12">
  <?php if ($departamentoEditar): ?>
    <form class="" action="<?php echo site_url('departamentos/procesarActualizacion'); ?>" method="post">
      <center>
          <input type="hidden" name="id_dep" value="<?php echo $departamento->id_dep?>">
        </center>
    <br>
      <div class="row">
        <div class="col-md-4 text-right">
        <label for="">NOMBRE: </label>
      </div>
      <div class="col-md-7">
        <input type="text" name="nombre_dep" value="<?php echo $departamentoEditar->nombre_dep?>" class="form-control" placeholder="Ingrese nombre del departamento" required>
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">AREA: </label>
      </div>
      <div class="col-md-7">
        <input type="text" name="area_dep" value="<?php echo $departamentoEditar->area_dep?>" class="form-control" placeholder="Ingrese el nombre del area" required>
      </div>
    </div>
  <br>
    <div class="row">
      <div class="col-md-4 text-right">
        <label for="">DESCRIPCION: </label>
      </div>
      <div class="col-md-7">
        <input type="text" name="descripcion_dep" value="<?php echo $departamentoEditar->descripcion_dep?>" class="form-control" placeholder="Ingrese la descripcion sobre el area"required>
      </div>
    </div>
  <br>
    <br><br>
    <div class="row">
      <div class="col-md-4">
      </div>
      <div class="col-md-7">
        <button type="submit" name="button" class="btn btn-warning">
          <i class="glyphicon glyphicon-ok"></i>
          ACTUALIZAR
        </button>
        <a href="<?php echo site_url('estudiantes/index') ?>" class="btn btn-danger">
          <i class="glyphicon glyphicon-remove-circle"></i>
          CANCELAR
        </a>
      </div>
    </div>
  </form>
  <?php else: ?>
    <div class="alert alert-danger">
      <b>No se encontro ningun estudiante</b>
    </div>
  <?php endif; ?>
  </div>
</div>
