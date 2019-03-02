<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 21:54
 */

class Panel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!isset($this->session->id)){
			redirect("");
		}
	}

	public function index(){
		$data = [
			"url" => base_url(Panel::class),
			"urlPanel" => base_url("/assets/panel/"),
			"urlPost" => base_url(Panel::class),
			"urlJs" => base_url("/assets/js/"),
			"urlImg" => base_url("/assets/img/"),
		];
		$data["loader"] = "var post = new Post('".base_url(Infraccion::class)."')";
		$this->parser->parse("panel",$data);
	}

	public function logoun(){
		$this->session->sess_destroy();
		redirect(Infraccion::class);
	}

	public function gestionUsuario($tipo = 0){
		switch ($tipo){
			case 1:{
				unset($_POST["id"]);
				$_POST["password"] = sha1($_POST["password"]);
				$validate = $this->usuarios->validate($_POST);
				return is_array($validate)
					? $this->response($validate)
					: $this->response($this->usuarios->get());
			}case 2:{
				return $this->response($this->usuarios->get());
			}
			case 3:{
				$_POST["password"] = password_verify($_POST["password"],"sha1") ? $_POST["password"] : sha1($_POST["password"]);
				if($this->usuarios->update($_POST)){
					return $this->response($this->usuarios->get());
				}
			}
			case 4:{
				return $this->response($this->usuarios->delete($this->input->post("id")));
			}
			default : {
				return $this->response(["estado"=>"No se ni me interesa"]);
			}
		}
	}

	public function gestionLeyes($tipo = 0){
		switch($tipo){
			case 1:{
				$validate = $this->leyes->validate($_POST);
				return is_array($validate)
					? $this->response($validate)
					: $this->response($this->leyes->get());
			}
			case 2:{
				return $this->response($this->leyes->get());
			}
			case 3:{
				if($this->leyes->update($_POST)){
					return $this->response($this->leyes->get());
				}
			}
			case 4:{
				return $this->response($this->leyes->delete($this->input->post("id")));
			}
			default : {
				return $this->response(["estado"=>"No se ni me interesa"]);
			}
		}
	}

	function getCode($length = 10) {
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}


	public function gestionInfraccion($tipo = 0){
		switch($tipo){
			case 1:{
				$data = [
					"code" => $this->getCode(),
					"usuario" => $this->session->id,
					"vehiculo" => $this->vehiculos->getOne("id",["placa"=>$this->input->post("placa")])->id,
					"ley" => $this->leyes->getWhere("id",["codigo" => $this->input->post("ley")])->id,
					"estado" => $this->input->post("estado")
				];
				$this->infraccion->register($data);
				return $this->response($this->infraccion->getInfraccion());
			}
			case 2:{
				return $this->response($this->infraccion->getInfraccion());
			}
			case 3:{

				$data = [
					"usuario" => $this->session->id,
					"vehiculo" => $this->vehiculos->getOne("id",["placa"=>$this->input->post("placa")])->id,
					"ley" => $this->leyes->getWhere("id",["codigo" => $this->input->post("ley")])->id,
					"estado" => $this->input->post("estado")
				];
				$id = $this->input->post("id");
				$this->infraccion->update($id,$data);
				return $this->response($this->infraccion->getInfraccion());
			}
			case 4:{
				return $this->response($this->infraccion->remove($this->input->post("id")));
			}
			case 5:{
				return $this->response($this->infraccion->getLike($_POST));

			}
			case 6:{
				$clase = $this->input->post("clase");
				$val = $this->input->post("key");
				$data = $this->{$clase}->get($val);
				$ouput = [];
				foreach ($data as $key => $value){
					array_push($ouput,$value->{$val});
				}
				return $this->response($ouput);
			}
			case 7:{
				$placa = trim($this->input->post("key"));
				$data = $this->personas->getWhere("p.documento",["v.placa" => $placa]);
				return $this->response($data);
			}
			case 8:{
				$codigo = trim($this->input->post("key"));
				$data = $this->leyes->getWhere("detalle",["codigo" => $codigo]);
				return $this->response($data);
			}
			default : {
				return $this->response(["estado"=>"No se ni me interesa"]);
			}
		}
	}
}
