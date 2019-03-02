<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 17:04
 */


class ModelUsuarios extends CI_Model
{
	public $table = "usuarios";
	public function __construct()
	{
		parent::__construct();
	}


	public function get($select = []){
		return $this->db->select($select)->get($this->table)->result();
	}

	/**
	 * @return bool
	 */
	public function login($username,$password){
		$users = $this->db->query("select *from {$this->table} where username = '{$username}' and password = '{$password}'");
		if($users->num_rows() > 0){
			$this->session->set_userdata($users->row_array());
			return true;
		}
		return false;
	}


	/**
	 * @param $data
	 * @return CI_DB_active_record|CI_DB_result
	 */
	public function register($data){
		$data["password"] = sha1($data["password"]);
		return $this->db->insert($this->table,$data);
	}

	/**
	 * @param array $where
	 * @return array|bool
	 */
	public function validate($data = [],$where = ["username","nuip","email"],$insert = true){
		foreach ($data as $key => $value){
			if(in_array($key,$where)){
				$this->db->where([$key=>$value]);
				$this->db->select($key);
				if($this->db->get($this->table)->num_rows() > 0){
					return ["error"=>"error {$value} ya existe","key"=>$key];
				}
			}
		}
		if($insert){
			$this->db->insert($this->table,$data);
		}
		return true;
	}



	public function update($data = []){
		$this->db->where('id', $data["id"]);
		return $this->db->update($this->table, $data);
	}


	public function delete($id = []){
		$this->db->select("username");
		$this->db->where("u.id",$id);
		$this->db->from($this->table." u");
		$this->db->join("infracciones i",'i.usuario = u.id');
		if($this->db->count_all_results()){
			return ["text"=>"no se puede eliminar,el Usuario tiene asignado un caso","estado"=>"error"];
		}
		$this->db->delete($this->table,compact("id"));
		return ["text" => "operacion realizada con exito","estado"=>"success"];
	}


}
