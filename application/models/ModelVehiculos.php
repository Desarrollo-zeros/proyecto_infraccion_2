<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 17:34
 */


class ModelVehiculos extends CI_Model
{
	public $table = "vehiculos";

	public function __construct()
	{
		parent::__construct();
	}

	public function get($select = []){
		return $this->db->select($select)->get($this->table)->result();
	}

	public function getOne($select = [],$where = []){
		$this->db->where($where);
		return $this->db->select($select)->get($this->table)->row();
	}
}
