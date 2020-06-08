<?php

	class Home extends Controlador {
		
		public function __construct() {
			
		}

		public function index() {

			$datos = [
				'titulo' => 'SOFTWARE DE ENTRA Y SALIDA DE BIENES ',
			];
			$this->vista('home/index', $datos);
		}

	}
