<?php
class UsuarioSenaM
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerUsuarioS()
    {
        $this->db->query('SELECT * from tbl_usuariosena');
        $resultados = $this->db->registros();
        return $resultados;
    }

  
    
    public function crearUsuarioS($datos)
    {
        $this->db->query('INSERT INTO tbl_usuariosena (identificacion, nombre_sena, apellido_sena, telefono, correo, numero_ficha, cargo) VALUES (:identificacion, :nombre, :apellido, :telefono, :correo, :ficha, :cargo);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        // $this->db->bind(':id', $datos['id']);
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':ficha', $datos['ficha']);
        $this->db->bind(':cargo', $datos['cargo']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarUsuarioS($datos)
    {
        $this->db->query('UPDATE tbl_usuariosena SET identificacion = :identificacion, nombre_sena = :nombre, apellido_sena = :apellido, telefono = :telefono, correo = :correo, numero_ficha = :ficha, cargo = :cargo WHERE idusuario_sena = :idusuario_sena');

        // Vinculamos los valores
        $this->db->bind(':idusuario_sena', $datos['idusuario_sena']);
        $this->db->bind(':identificacion', $datos['identificacion']);
        $this->db->bind(':nombre', $datos['nombre']);
        $this->db->bind(':apellido', $datos['apellido']);
        $this->db->bind(':telefono', $datos['telefono']);
        $this->db->bind(':correo', $datos['correo']);
        $this->db->bind(':ficha', $datos['ficha']);
        $this->db->bind(':cargo', $datos['cargo']);

        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarUsuarioS($datos)
    {
        $this->db->query('DELETE FROM tbl_usuariosena WHERE idusuario_sena = :idusuario_sena');
        $this->db->bind(':idusuario_sena', $datos['idusuario_sena']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}