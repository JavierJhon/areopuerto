<legend class="text-center"><i class="glyphicon glyphicon-user"></i><b>GESTION DE EQUIPAJES</b></legend>
<hr>

<div class="row">
  <div class="col-md-5">

  </div>
  <div class="col-md-6">

    <a href="<?php echo site_url('equipajes/nuevo'); ?>" class="btn btn-success">
      <i class="glyphicon glyphicon-plus"></i>
      AGREGAR NUEVO
    </a>
  </div>

</div>
<br><br>
<?php if ($listadoEquipajes): ?>
  <thead>
    <table class="table table-striped table-border table-hover">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">COLOR</th>
        <th class="text-center">PESO</th>
        <th class="text-center">DESCRIPCION</th>
        <th class="text-center">DESTINO</th>
        <th class="text-center">ACCIONES</th>
      </tr>

  </thead>

  <tbody>
    <?php foreach ($listadoEquipajes->result() as $equipajeTemporal): ?>
      <tr>
        <td class="text-center">
          <?php echo $equipajeTemporal->id_equ; ?>
        </td>
        <td class="text-center">
          <?php echo $equipajeTemporal->color_equ; ?>
        </td>
        <td class="text-center">
          <?php echo $equipajeTemporal->peso_equ; ?>
        </td>
        <td class="text-center">
          <?php echo $equipajeTemporal->descripcion_equ; ?>
        </td>
        <td class="text-center">
          <?php echo $equipajeTemporal->destino_equ; ?>
        </td>



        <td class="text-center">
          <a href="<?php echo site_url('equipajes/actualizar'); ?>/<?php echo $equipajeTemporal->id_equ; ?>" class="btn btn-warning">Editar </a>
          <a href="<?php echo site_url('equipajes/borrar'); ?>/<?php echo $equipajeTemporal->id_equ; ?>" class="btn btn-danger"> Eliminar</a>
        </td>
      </tr>

    <?php endforeach; ?>
    </tbody>
  </table>
<?php else: ?>
  <h3><b>NO EXISTEN EQUIPAJES RESGISTRADOS</b><h3>
<?php endif; ?>
