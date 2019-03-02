<?php
/**
 * Created by PhpStorm.
 * User: zeros
 * Date: 23/02/19
 * Time: 18:31
 */

class ModelLeyes extends CI_Model
{

	public $table = "leyes";

	public function __construct()
	{
		parent::__construct();
	}

	public function get($select = []){
		return $this->db->select($select)->get($this->table)->result();
	}

	public function validate($data = [],$where = ["codigo","detalle"],$insert = true){
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
		$this->db->select("codigo");
		$this->db->where("l.id",$id);
		$this->db->from($this->table." l");
		$this->db->join("infracciones i",'i.ley = l.id');
		if($this->db->count_all_results()){
			return ["text"=>"no se puede eliminar,esta ley tiene asignado un caso","estado"=>"error"];
		}
		$this->db->delete($this->table,compact("id"));
		return ["text" => "operacion realizada con exito","estado"=>"success"];
	}

	public function getWhere($select = [],$where = []){
		$this->db->where($where);
		return $this->db->select($select)->get($this->table)->row();

	}


}
