<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infraccion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(isset($this->session->id)) {
			$data = [
				"modalLogin" => '',
				"urlPanel" => base_url("panel"),
				"nameBtnLogin" => 'Panel',
				"url" => base_url(),
				"urlCss" => base_url("/assets/css/"),
				"urlJs" => base_url("/assets/js/"),
				"urlImg" => base_url("/assets/img/"),
				"urlPost" => base_url(Infraccion::class),
			];
		}else{
			$data = [
				"modalLogin" =>'$("#login").modal()',
				"urlPanel" => "javascript:void(0)",
				"nameBtnLogin" => 'Iniciar Sesíon',
				"url" => base_url(),
				"urlCss" => base_url("/assets/css/"),
				"urlJs" => base_url("/assets/js/"),
				"urlImg" => base_url("/assets/img/"),
				"urlPost" => base_url(Infraccion::class)
			];
		}
		$data["loader"] = "var post = new Post('".base_url(Infraccion::class)."')";
		$this->parser->parse('index',$data);
	}

	public function login(){
		return $this->response($this->usuarios->login($this->input->post("username"),sha1($this->input->post("password"))));
	}


	public function getDocumentoPlaca(){

		$d = $this->personas->get("documento");
		$p = $this->vehiculos->get("placa");

		$placa = [];
		$documento = [];

		foreach ($d as $key => $value){
			array_push($documento,$value->documento);
		}
		foreach ($p as $key => $value){
			array_push($placa,$value->placa);
		}
		return $this->response([compact("documento"),compact("placa")]);
	}


	public function getInfraccion(){
		return $this->response($this->infraccion->getInfraccion($this->input->post("key"),$this->input->post("value")));
	}




}
