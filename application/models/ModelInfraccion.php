<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 17:37
 */


class ModelInfraccion extends CI_Model{

	public $table = "infracciones";

	public function __construct()
	{
		parent::__construct();
	}

	public function get($select = []){
		return $this->db->select($select)->get($this->table)->result();
	}

	public function getInfraccion($key = "",$value = ""){

		$this->db->from('personas p');
		$this->db->join('vehiculos v', 'p.id = v.persona');
		$this->db->join('infracciones i', 'v.id = i.vehiculo');
		$this->db->join('leyes l', 'l.id = i.ley');
		$this->db->join('usuarios u', 'u.id = i.usuario');
		if(!empty($key) && !empty($value)){

			$this->db->where($key,$value);
		}
		if($this->session->rol == 1){
			$this->db->where("u.id =",$this->session->id);
		}
		return $this->db->get()->result();
	}

	public function getLike($data){
		$this->db->from('personas p');
		$this->db->join('vehiculos v', 'p.id = v.persona');
		$this->db->join('infracciones i', 'v.id = i.vehiculo');
		$this->db->join('leyes l', 'l.id = i.ley');
		$this->db->join('usuarios u', 'u.id = i.usuario');
		$this->db->like($data);
		if($this->session->rol == 1){
			$this->db->where("u.id =",$this->session->id);
		}
		return $this->db->get()->result();
	}

	public function register($data = []){
		return $this->db->insert($this->table,$data);
	}


	public function update($id,$data = []){
		$this->db->where('idInfraccion', $id);
		return $this->db->update($this->table, $data);
	}


	public function remove($idInfraccion = ""){
		$this->db->where(compact("idInfraccion"));
		$this->db->delete($this->table);
		return ["text" => "operacion realizada con exito","estado"=>"success"];
	}


}
