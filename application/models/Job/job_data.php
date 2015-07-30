<?php

class job_data extends CI_Model{

	public function __construct() 
	{
		$this->load->database();
	}

	public function get_jobs_list()
	{
		$this->db->select('id,title,description');

		return $this->db->get('job_data')->result();
	}

}
