
<?php

class UsuarioSena extends Controlador {
	
	public function __construct() {
		$this->UsuarioSenaM = $this->modelo('UsuarioSenaM');
	}

	public function index() {

		$this->vista('Usuarios/UsuarioSena');
	}

/*
Método que Crea o inserta un usuario sena en la base de datos, usando el modelo 
@param los datos que llegan del formulario
@return Respuesta de la base de datos en formato JSON para JS
@throws Respuesta Negativa de la base de datos
*/
public function crearUsuarioS()
{
	$id=$_POST['idusuario_sena'];
	
	if (empty($id)) {
		$datos = [
			'identificacion' => $_POST['identificacion'],
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'telefono' => $_POST['telefono'],
			'correo' => $_POST['correo'],
			'ficha' => $_POST['ficha'],
			'cargo' => $_POST['cargo'],
	];
		$datos = $this->UsuarioSenaM->crearUsuarioS($datos);
		echo json_encode($datos);
	} else {
		$datos = [
			'idusuario_sena' => $_POST['idusuario_sena'],
			'identificacion' => $_POST['identificacion'],
			'nombre' => $_POST['nombre'],
			'apellido' => $_POST['apellido'],
			'telefono' => $_POST['telefono'],
			'correo' => $_POST['correo'],
			'ficha' => $_POST['ficha'],
			'cargo' => $_POST['cargo'],
				
	];
		$datos = $this->UsuarioSenaM->actualizarUsuarioS($datos);
		echo json_encode($datos);
	}
}


public function llenarTablaUsuarioSena()
{
	$datos = $this->UsuarioSenaM->obtenerUsuarioS();
	echo json_encode($datos);
}

public function eliminarUsuarioS()
{
	$datos =[
		'idusuario_sena' => $_POST['idusuario_sena']
	];

	$datos = $this->UsuarioSenaM->eliminarUsuarioS($datos);
	echo json_encode($datos);
}

}