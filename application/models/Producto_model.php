<?php 

class Producto_model extends CI_Model
{

	public function insertProdruct($nombre_producto,$codigo,$tipo,$precio)
	{
		$query="INSERT INTO producto (nombre_producto,codigo_producto,tipo_producto,costo_producto)
				VALUES ('$nombre_producto','$codigo','$tipo','$precio')";
		$insert=$this->db->query($query);

		if ($insert) 
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function allProduct()
	{
		$query="SELECT * FROM producto";
		$all_product=$this->db->query($query);
		return $all_product->result();
	}

	public function selectProduct( $id)
	{
		$query="SELECT * FROM producto where id_producto = $id";
		$all_product=$this->db->query($query);
		return $all_product->result();
	}	

}