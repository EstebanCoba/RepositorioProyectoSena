<?php


	class BienesC extends Controlador {
		
		public function __construct() {
			$this->BienesModelo = $this->modelo('BienesModelo');
		}

		public function index() {

			$this->vista('Bienes/BienVista');
		}
		/*
    Método que Crea o inserta un usuario sena en la base de datos, usando el modelo 
    @param los datos que llegan del formulario
    @return Respuesta de la base de datos en formato JSON para JS
    @throws Respuesta Negativa de la base de datos
    */
    public function crearBien()
    {
        $id=$_POST['idbn'];
        
        if (empty($id)) {
            $datos = [
                'idusuario_sena' => $_POST['idusuario_sena'],
                'marca' => $_POST['marca'],
                'referencia' => $_POST['referencia'],
                'dispositivo' => $_POST['dispositivo'],
                
        ];
            $datos = $this->BienesModelo->crearBien($datos);
            echo json_encode($datos);
        } else {
            $datos = [
                'idbn' => $_POST['idbn'],
                'idusuario_sena' => $_POST['idusuario_sena'],
                'marca' => $_POST['marca'],
                'referencia' => $_POST['referencia'],
                'dispositivo' => $_POST['dispositivo'],
                
                    
        ];
            $datos = $this->BienesModelo->actualizarBien($datos);
            echo json_encode($datos);
        }
    }

     public function llenarTablaBien()
    {
        $datos = $this->BienesModelo->obtenerBien();
        echo json_encode($datos);
    }

    public function eliminarBien()
    {
        $datos =[
            'idbn' => $_POST['id']
        ];

        $datos = $this->BienesModelo->eliminarBien($datos);
        echo json_encode($datos);
    }
}