

<?php
class BienesModelo
{
    private $db;

    public function __construct()
    {
        $this->db = new Base;
    }

    public function obtenerBien()
    {
        $this->db->query('SELECT * from tbl_bienes');
        $resultados = $this->db->registros();
        return $resultados;
    }

  
    
    public function crearBien($datos)
    {
        $this->db->query('INSERT INTO tbl_bienes (idbn, idusuario_sena,  marca, referencia, dispositivo) VALUES (:idbn, :idusuario_sena,  :marca, :referencia, :dispositivo);');
        
        // Vinculamos los valores que llegan del formulario con la consulta sql
        $this->db->bind(':idbn', $datos['idbn']);
        $this->db->bind(':idusuario_sena', $datos['idusuario_sena']);
        $this->db->bind(':marca', $datos['marca']);
        $this->db->bind(':referencia', $datos['referencia']);
        $this->db->bind(':dispositivo', $datos['dispositivo']);
        // Ejecutamos la consulta
        if ($this->db->execute()) {
            return 'Inserción exitosa';
        } else {
            return 'Error en la inserción';
        }
    }
   
    public function actualizarBien($datos)
    {
        $this->db->query('UPDATE tbl_bienes SET marca = :marca, referencia = :referencia, dispositivo = :dispositivo
        
        WHERE idbn = :idbn');

        // Vinculamos los valores
        $this->db->bind(':idbn', $datos['idbn']);
        $this->db->bind(':marca', $datos['marca']);
        $this->db->bind(':referencia', $datos['referencia']);
        $this->db->bind(':dispositivo', $datos['dispositivo']);
        // Ejecutar
        if ($this->db->execute()) {
            return 'Actualizó con exito';
        } else {
            return 'Error en la actualización';
        }
    }
    
    public function eliminarBien($datos)
    {
        $this->db->query('DELETE FROM tbl_bienes WHERE idbn = :id');
        $this->db->bind(':id', $datos['idbn']);

        // Ejecutar
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}