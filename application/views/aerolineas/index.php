<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE AEROLINEAS</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('aerolineas/nuevo'); ?>" class="btn btn-success">
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
        <th class="text-center">TELEFONO</th>
        <th class="text-center">CORREO</th>
        <th class="text-center">NUMERO DE AVIONES</th>
        <th class="text-center">ACCIONES</th>
      </tr>

  </thead>

  <tbody>
    <?php foreach ($listadoAerolineas->result() as $aerolineaTemporal): ?>
      <tr>
        <td class="text-center">
          <?php echo $aerolineaTemporal->id_aer; ?>
        </td>
        <td class="text-center">
          <?php echo $aerolineaTemporal->nombre_aer; ?>
        </td>
        <td class="text-center">
          <?php echo $aerolineaTemporal->telefono_aer; ?>
        </td>
        <td class="text-center">
          <?php echo $aerolineaTemporal->correo_aer; ?>
        </td>
        <td class="text-center">
          <?php echo $aerolineaTemporal->numavion_aer; ?>
        </td>



        <td class="text-center">
          <a href="<?php echo site_url('aerolineas/actualizar'); ?>/<?php echo $aerolineaTemporal->id_aer; ?>" class="btn btn-warning">Editar </a>
          <a href="<?php echo site_url('aerolineas/borrar'); ?>/<?php echo $aerolineaTemporal->id_aer; ?>" class="btn btn-danger"> Eliminar</a>
        </td>
      </tr>

    <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>NO EXISTEN AEROLINEAS</b><h3>
<?php endif; ?>
