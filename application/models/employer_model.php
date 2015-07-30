<?php

class employer_model extends CI_Model{

	public function __construct() 
	{
		$this->load->database();
	}

	public function add_to_employers($name)
	{
		$employer["name"] = $name;
		$this->db->insert("employer_data",$employer);
	}

	public function get_names_list()
	{
		$this->db->select("name");
		$this->db->order_by("id","DESC");

		return $this->db->get("employer_data")->result();
	}

}
