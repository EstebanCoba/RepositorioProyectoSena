<?php require RUTA_APP . '/views/inc/header2.php' ;?>
<!-- <link rel="stylesheet" href="../css/styles.css"> -->
<nav class="framework py-4" >
	<h1 class="display-4 text-center"><?php echo $datos['titulo'] ;?></h1>
	<p class="lead">Software de buena calidad</p>
	
</nav>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= RUTA_URL;?>/home/index.php">Inicio</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="<?= RUTA_URL;?>/Usuarios">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Visitantes</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav> -->



<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-1">
            </div>

            <div class="col-md-11">


                <div class="card" id="vistatabla">
                    <div class="card-header">
                        <b>Usuarios</b> <button type="button" id="nuevo" class="btn btn-success" data-toggle='tooltip'
                            title=' Agregar un cliente'> <i class="icon-plus"></i> </button>
                    </div>
                    <div class="card-body">
                        <table id="tablaUsuarios" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    
                                    <th>Id</th>
                                    <th>Identificacion</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Telefono</th>
                                    <th>direccion</th>
                                    <th>Correo</th>
                                    <th>Pass</th>
                                    <th>Rol</th>
                                    <th></th>
                                    <th></th>
                                    
                                    
                                    
                                </tr>
                            </thead>
                        </table>

                    </div>

                </div>


                <div class="card" id="formulario">
                    <div class="card-header">
                        <b>Usuarios</b>
                    </div>
                    <div class="card-body">
                        <form class="formU" method="POST">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="my-input">Id</label>
                                    <input id="id" class="form-control" type="text" name="id" readonly>
                                    <label for="my-input">Identificacion</label>
                                    <input id="identificacion" class="form-control" type="text" name="identificacion" required>
                                    <label for="my-input">Nombre</label>
                                    <input id="nombre" class="form-control" type="text" name="nombre" required>
                                    <label for="my-input">Apellidos</label>
                                    <input id="apellido" class="form-control" type="text" name="apellido" required>
                                    <label for="my-input">Telefono</label>
                                    <input id="telefono" class="form-control" type="text" name="telefono" required>
                                    <label for="my-input">Dirección</label>
                                    <input id="direccion" class="form-control" type="text" name="direccion" required>
                                    <label for="my-input">Correo</label>
                                    <input id="correo" class="form-control" type="email" name="correo" required>

                                </div>
                                <div class="col-md-5">
                                        <label for="my-input">Pass</label>
                                        <input id="pass" class="form-control" type="text" name="pass" required>
                                        <label class="form-check-label">
                                            <label>Rol</label>
                                            <select class="form-control" id="rol" name="rol" required>
                                                <option>Administrador</option>
                                                <option>Vigilante</option>

                                            </select>
                                        </label>




                                    </div>
                                <!-- <div class="col-md-5">
                                    <label class="form-check-label">
                                        <label>Estado del cliente</label>
                                        <select class="form-control" id="estado" name="estado">
                                            <option>Activo</option>
                                            <option>Inactivo</option>

                                        </select>
                                    </label>
                                    <br>
                                    <label for="my-input">Fecha Ingreso</label>
                                    <input id="fecha" class="form-control" type="date" name="fecha">
                                    <label for="my-input">Deuda</label>
                                    <input id="deuda" class="form-control" type="text" name="deuda">


                                </div> -->
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-primary" type="button" id="cancelar"><i class="icon-reply"></i>
                                    Cancelar</button>

                                <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                        </form>

                    </div>

                </div>
            </div>

        </div>
</div>
</section>
</div>

<!-- jQuery 3 -->
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
    crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- AdminLTE App -->

<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

<script src="<?php echo RUTA_URL; ?>/js/modulos/usuario.js"></script>


<?php require RUTA_APP . '/views/inc/footer2.php'; ?>

    <!-- Fin del codigo del sitio -->
