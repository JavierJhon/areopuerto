<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">  <!-- para caracteres especiales es el utf-8 -->
    <title>Areopuerto</title>

    <!-- para hacer compatible con los navegadores edge -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- importacion jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="  crossorigin="anonymous"></script>
    <!-- impprtacion boostraps -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </head>
  <body>
    <!-- colocacion de imagen -->
    <div class="text-center">
      <img src="<?php echo base_url(); ?>/assets/img/school.png" alt="logo" class="img-circle">
    </div>
    <!-- PARA lA CREACION DE UN MENU -->
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=" <?php echo site_url(); ?>">APP AREOPUERTO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <!-- clase areolinea -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AREOLINEAS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('aerolineas/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('aerolineas/nuevo'); ?>">Nuevo</a></li>

          </ul>
        </li>

        <!-- otra clase drop para vuelo -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">VUELOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('vuelos/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('vuelos/nuevo'); ?>">Nuevo</a></li>

          </ul>
        </li>

        <!-- otra calse drop para pasajero -->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PASAJEROS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('estudiantes/index'); ?>">Listado</a></li>
            <li><a href="<?php echo site_url('estudiantes/nuevo'); ?>">Nuevo</a></li>

          </ul>
        </li>

        <!-- otra clase drop para equipaje -->

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EQUIPAJE <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo site_url('equipajes/index'); ?>">Listado</a></li>
                <li><a href="<?php echo site_url('equipajes/nuevo'); ?>">Nuevo</a></li>

              </ul>
            </li>

            <!-- otra clase drop para departamento de trabajo -->

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEPARTAMENTOS TRABAJO <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo site_url('colegios/index'); ?>">Listado</a></li>
                    <li><a href="<?php echo site_url('colegios/nuevo'); ?>">Nuevo</a></li>

                  </ul>
                </li>

                <!-- otra clase drop para empleado -->

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EMPLEADOS <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('empleados/index'); ?>">Listado</a></li>
                        <li><a href="<?php echo site_url('empleados/nuevo'); ?>">Nuevo</a></li>

                      </ul>
                    </li>


      </ul>
      <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

