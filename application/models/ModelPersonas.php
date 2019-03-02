<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 17:08
 */



class ModelPersonas extends CI_Model
{

	public $table = "personas";

	public function __construct()
	{
		parent::__construct();
	}

	public function get($select = []){
		return $this->db->select($select)->get($this->table)->result();
	}

	public function getWhere($select = "",$where = []){
		$this->db->from("personas p");
		$this->db->join('vehiculos v', 'p.id = v.persona');
		$this->db->where($where);
		$this->db->distinct();
		return $this->db->select($select)->get($this->table)->row();
	}
}
