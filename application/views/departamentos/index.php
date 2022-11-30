<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE DEPARTAMENTO</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('departamentos/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
    </a>
  </div>

</div>
<br><br>
<?php if ($listadoAerolineas): ?>
  <thead>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">AREA</th>
        <th class="text-center">DESCRIPCION</th>
      </tr>

  </thead>

  <tbody>
    <?php foreach ($listadoDepartamentos->result() as $departamentoTemporal): ?>
      <tr>
        <td class="text-center">
          <?php echo $departamentoTemporal->id_dep; ?>
        </td>
        <td class="text-center">
          <?php echo $departamentoTemporal->nombre_dep; ?>
        </td>
        <td class="text-center">
          <?php echo $departamentoTemporal->area_dep; ?>
        </td>
        <td class="text-center">
          <?php echo $departamentoTemporal->descripcion_dep; ?>
        </td>
        <td class="text-center">
          <a href="<?php echo site_url('departamento/actualizar'); ?>/<?php echo $departamentoTemporal->id_dep; ?>" class="btn btn-warning">Editar </a>
          <a href="<?php echo site_url('departamentos/borrar'); ?>/<?php echo $departamentoTemporal->id_dep; ?>" class="btn btn-danger"> Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>NO EXISTEN AEROLINEAS</b><h3>
<?php endif; ?>
