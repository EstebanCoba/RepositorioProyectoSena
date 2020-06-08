<?php require RUTA_APP . '/views/inc/header2.php' ;?>

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">
            

                <div class="col-md-12" style="height:700px">


                    <div class="card" id="vistatablaBien">
                        <div class="card-header">
                        <button type="button" id="nuevobien" class="btn btn-secondary" data-toggle='tooltip'
                                title=' Agregar un nuevo bien'>Nuevo Bien</button>
                        </div>
                        <div class="card-body">
                            <table id="tablabien" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Id Bien</th>
                                        <th>Id Usuario Sena</th> 
                                        <th>Marca</th>
                                        <th>Referencia</th>
                                        <th>Dispositivo</th>
                                        <th></th>
                                        <th></th>
                                        

                                    </tr>
                                </thead>
                            </table>

                        </div>

                    </div>


                    <div class="card" id="formularioRegistroBien" >
                        <div class="card-header">
                            <b>Bienes</b>
                        </div>
                        <div class="card-body">
                            <form class="form" method="POST">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="my-input">Id Bien</label>
                                        <input id="idbn" class="form-control" type="text" name="idbn" readonly>
                                        <label for="my-input">Marca</label>
                                        <input id="marca" class="form-control" type="text" name="marca" required>
                                        <label for="my-input">Referencia</label>
                                        <input id="referencia" class="form-control" type="text" name="referencia" required>
                                        <label for="my-input">Dispositivo</label>
                                        <input id="dispositivo" class="form-control" type="text" name="dispositivo" required>
                                        <label for="my-input">id Usuario Sena</label>
                                        <input id="idusuario_sena" class="form-control" type="text" name="idusuario_sena"  >

                                    </div>
                                    <div class="col-md-5">



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


<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>


<script src="<?php echo RUTA_URL; ?>/js/modulos/bines.js"></script>


<?php require RUTA_APP . '/views/inc/footer2.php'; ?>
