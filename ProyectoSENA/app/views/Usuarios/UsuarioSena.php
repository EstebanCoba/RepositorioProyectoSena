<?php require RUTA_APP . '/views/inc/header2.php' ;?>
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
            

                <div class="col-md-12" style="height:700px">


                    <div class="card" id="vistatablaSena">
                        <div class="card-header">
                        <button type="button" id="nuevousuariosena" class="btn btn-secondary" data-toggle='tooltip'
                                title='Registrar un nuevo usuario sena'>Nuevo Usuario Sena</button>
                        </div>
                        <div class="card-body">
                            <table id="tablasena" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                       
                                        <th>Id</th>
                                        <th>Identificacion</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>Correo</th>
                                        <th>ficha</th>
                                        <th>Cargo</th>
                                        <th></th>
                                        <th></th>
                                       
                                        
                                        
                                    </tr>
                                </thead>
                            </table>

                        </div>

                    </div>


                    <div class="card" id="formularioUsuarioSena" >
                        <div class="card-header">
                            <b>Usuarios Sena</b>
                        </div>
                        <div class="card-body">
                            <form class="form" method="POST">
                                <div class="row">
                                    <div class="col-md-5">

                                        <label for="my-input">Id Usuario Sena</label>
                                        <input id="idusuario_sena" class="form-control" type="text" name="idusuario_sena" readonly>
                                        <label for="my-input">Identificacion</label>
                                        <input id="identificacion" class="form-control" type="text" name="identificacion" required>
                                        <label for="my-input">Nombre</label>
                                        <input id="nombre" class="form-control" type="text" name="nombre" required>
                                        <label for="my-input">Apellidos</label>
                                        <input id="apellido" class="form-control" type="text" name="apellido" required>
                                        <label for="my-input">Telefono</label>
                                        <input id="telefono" class="form-control" type="text" name="telefono" required>
                                        <label for="my-input">correo</label>
                                        <input id="correo" class="form-control" type="email" name="correo" required>
                                        <label for="my-input">Ficha</label>
                                        <input id="ficha" class="form-control" type="text" name="ficha" required>
                                        
                                       
                                        
                                        

                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-check-label">
                                            <label>Cargo</label>
                                            <select class="form-control" id="cargo" name="cargo" required>
                                                <option>Instructor</option>
                                                <option>Aprendiz</option>
                                                <option>Funcionario</option>
                                            </select>
                                        </label>
                                        

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-danger" type="button" id="cancelar"><i class="icon-reply"></i>
                                        Cancelar</button>

                                    <input id="guardar" class="btn btn-success" type="submit" value="Guardar">
                            </form>

                        </div>

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



<script src="<?php echo RUTA_URL; ?>/js/modulos/usuariosena.js"></script>


<?php require RUTA_APP . '/views/inc/footer2.php'; ?>
