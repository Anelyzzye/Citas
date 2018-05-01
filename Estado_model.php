<?php 
class Estado_model extends CI_Model{
//esta funcion inserta los datos
	public function altaestado($estado)
	{
		$sql="INSERT INTO estado (estado) VALUES ('$estado')";
		$consulta=$this->db->query($sql) OR DIE ('ERROR DE CONSULTA');
		return $consulta;
	}
	public function buscaestado($criterio)
	{
		$sql="SELECT * FROM estado WHERE (idestado LIKE '%criterio%' OR estado LIKE '%$criterio%') ORDER BY estado ASC";
		$consulta=$this->db->query($sql) OR DIE ('ERROR DE CONSULTA');
		return $consulta->result();
	}
	}