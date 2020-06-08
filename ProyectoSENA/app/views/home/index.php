<?php require RUTA_APP . '/views/inc/header.php' ;?>

<nav class="framework py-4" >
	<h1 class="display-4 text-center"><?php echo $datos['titulo'] ;?></h1>
	<p class="lead">Software de buena calidad</p>
	
</nav>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= RUTA_URL;?>/UsuariosC/UsuariosVista.php">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= RUTA_URL;?>/UsuarioSena/UsuarioSena.php">Usuario Sena</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="<?= RUTA_URL;?>/BienesC/BienVista.php">Bienes</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>




<div class = "container">


	<div class="row">

    <div class="col-md-4">

      <div class="card" style="width: 18rem;">
        <img src="<?= RUTA_URL;?>/public/img/imagen1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

    </div>

    <div class="col-md-4">

      <div class="card" style="width: 18rem;">
          <img src="<?= RUTA_URL;?>/public/img/imagen2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
    
    </div>

    <div class="col-md-4">

      <div class="card" style="width: 18rem;">
          <img src="<?= RUTA_URL;?>/public/img/imagen3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
    
    </div>

	</div>

  

			

</div>
<?php require RUTA_APP . '/views/inc/footer.php' ;?>