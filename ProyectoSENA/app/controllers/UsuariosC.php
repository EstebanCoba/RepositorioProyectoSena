<?php

	class UsuariosC extends Controlador {
		
		public function __construct(){

			$this->UsuarioModelo = $this->modelo('UsuarioModelo');

		}

		public function index(){
            $datos = [
                'titulo' => 'Usuarios',
            ];
            $this->vista('Usuarios/UsuariosVista', $datos);
		}
		public function llenarTablaUsuario()
		{
			$datos = $this->UsuarioModelo->obtenerUsuarios();
			echo json_encode($datos);
		}

		public function crearUsuario()
		{
			$id=$_POST['id'];
			if (empty($id)){
				$datos = [
					'identificacion' => $_POST['identificacion'],
					'nombre' => $_POST['nombre'],
					'apellido' => $_POST['apellido'],
					'telefono' => $_POST['telefono'],
					'direccion' => $_POST['direccion'],
					'correo' => $_POST['correo'],
					'pass' => $_POST['pass'],
					'rol' => $_POST['rol'],
					
					
			];
				$datos = $this->UsuarioModelo->crearUsuario($datos);
				echo json_encode($datos);
			}else {

				$datos = [
					'id' => $_POST['id'],
					'identificacion' => $_POST['identificacion'],
					'nombre' => $_POST['nombre'],
					'apellido' => $_POST['apellido'],
					'telefono' => $_POST['telefono'],
					'direccion' => $_POST['direccion'],
					'correo' => $_POST['correo'],
					'pass' => $_POST['pass'],
					'rol' => $_POST['rol'],


				];

			}
				
				$datos = $this->UsuarioModelo->actualizarUsuario($datos);
				echo json_encode($datos);
			
		}
		public function eliminarusuario()
    	{
    	    $datos =[
    	        'id_usuario' => $_POST['id']
    	    ];
		
    	    $datos = $this->UsuarioModelo->eliminarusuario($datos);
    	    echo json_encode($datos);
    	}
	   
	
	}

	

