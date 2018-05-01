<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function llamaestado()
	{
		$this->load->view('welcome_message');
	}
	public function recibeestado()
	{
		$estado=$this->input->post('estado');
		$this->load->model('Estado_model');
		$estado=$this->Estado_model->altaestado($estado);
	}
	//lanzamos la vista de busqueda
	public function llamabusquedaestado()
	{
		$this->load->view('Busquedaestado');
	}
	public function cargainfoestado()
	{
		$criterio=$this->input->post('criterio');
		$this->load->model('Estado_model');
		$data['resultado']=$this->Estado_model->buscaestado($criterio);
		$this->load->view('conssultaestado',$data);
	}
}
