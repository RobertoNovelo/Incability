<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function main()
	{
		$this->load->view('employer');
	}

	public function add_employer()
	{
		$this->load->model("employer_model");

		$name = $this->input->post("name");

		$this->employer_model->add_to_employers($name);

		$response["names"] = $this->employer_model->get_names_list();

		$response["responseStatus"] = true;

		echo json_encode($response);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */