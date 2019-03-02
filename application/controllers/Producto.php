<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('producto_model','pro', TRUE);
		$this->load->helper(array('url','form'));
		
	}

	public function genera_numero()
	{
		$codigo=rand(1,9999);//rand que genera el numero aleatorio
		//$data=$this->no_duplic_num_solicitudC($codigo);// aqui se hace referencia al metodo no_duplic_num_solicitudC pasando el rand que se fue creado.
		return $codigo;
	}

	/*public function no_duplic_num_solicitudC($codigo)
	{
		$data=$this->no_duplic_num_solicitud($codigo);
		if ($data == 1) 
		{
			$duplicado=$this->genera_numero();
		}
		else
		{ 
			return $codigo;
		}
	}
	public function no_duplic_num_solicitud($codigo)
	{
		$registro="SELECT codigo FROM unidad_negocio where codigo = '$codigo'";
		$query=$this->db->query($registro);
		$numero=$query->num_rows();// cuento las filas que retorna la consulta.
		if ($numero > 0) // aqui verifica si el resultado de la consulta trae mas de un registro
		{// si el resultado es mayor a 0 entonces retorno 1
			return 1;
		}
		else
		{ // si no retorno 0;
			return 0;
		}
	}*/


	public function index($message=false)
	{
		if (empty($message)) 
		{
			$mensaje = 0;
		}
		else
		{
			$mensaje = $message;
		}
		$codigo=$this->genera_numero();
		$data = array('code' => $codigo,'mensaje' => $mensaje );
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('producto/create',$data);
		$this->load->view('layout/footer');
	}

	public function edit()
	{
		$all_product=$this->pro->allProduct();
		$data = array('all_product' => $all_product );
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('producto/index',$data);
		$this->load->view('layout/footer');
	}
	
	public function insert() 
	{ 
		$nombre_producto=$this->input->post('nombre_producto');
		$codigo=$this->input->post('codigo_producto');
		$tipo=$this->input->post('tipo_producto');
		$precio=$this->input->post('precio');
		$insert=$this->pro->insertProdruct($nombre_producto,$codigo,$tipo,$precio);
		if ($insert == 1) 
		{
			$this->index($insert);
		}
		else
		{
			$this->load->view('errors/error_db');
		}
	}

	public function view()
	{
		$id=$this->input->post('id');
		$all_product=$this->pro->selectProduct($id);
		$data = array('all_product' =>$all_product);
		$this->load->view('producto/view_product',$data);
	}
}
