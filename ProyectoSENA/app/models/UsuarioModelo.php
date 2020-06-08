<?php

class UsuarioModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarios()
    {
        $this->db->query('SELECT * FROM tbl_usuarios;');
        $resultados = $this->db->registros();
        return $resultados;
    }
    
    public function crearUsuario($datos){
    	$this->db->query('INSERT INTO tbl_usuarios (identificacion, nombre_usuario, apellido_usuario ,telefono ,direccion  ,correo ,pass  ,rol) VALUES (:identificacion, :nombre, :apellido, :telefono, :direccion, :correo, :pass, :rol);');
        
        // Vinculamos los valores
        $this->db->bind(':identificacion', $datos['identificacion']);
    	$this->db->bind(':nombre', $datos['nombre']);
    	$this->db->bind(':apellido', $datos['apellido']);
    	$this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':pass', $datos['pass']);
        $this->db->bind(':rol', $datos['rol']);
    	// Ejecutar
        if ($this->db->execute()) {
            return 'insercion exitosa';
        } else {
            return 'falla en la insercion';
        }
    }

    // public function obtenerUsuarioId($id) {
    // 	$this->db->query('SELECT * FROM usuarios WHERE id_usuario = :id');
    // 	$this->db->bind(':id', $id);
    // 	$resultados = $this->db->registro();
    // 	return $resultados;
    // }

    public function actualizarUsuario($datos) {
    	$this->db->query('UPDATE tbl_usuarios SET identificacion = :identificacion, nombre_usuario = :nombre, apellido_usuario = :apellido, telefono = :telefono, direccion = :direccion, correo = :correo, pass = :pass, rol = :rol WHERE id = :id');
        
    	// Vinculamos los valores
        $this->db->bind(':id', $datos['id']);
        $this->db->bind(':identificacion', $datos['identificacion']);
    	$this->db->bind(':nombre', $datos['nombre']);
    	$this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':direccion', $datos['direccion']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':pass', $datos['pass']);
        $this->db->bind(':rol', $datos['rol']);
        
    	// Ejecutar
    	if ($this->db->execute()){
    		return true;
    	} else {
    		return false;
    	}
    }

    public function eliminarusuario($datos) {
    	$this->db->query('DELETE FROM tbl_usuarios WHERE id = :id');
    	$this->db->bind(':id', $datos['id_usuario']);

    	// Ejecutar
    	if ($this->db->execute()){
    		return true;
    	} else {
    		return false;
    	}
    }
}
