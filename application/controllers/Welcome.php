<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function register()
	{
		var_dump($this->input->post());
		if ($this->input->post('submit'))
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$firstName = $this->input->post('firstName');
			$lastName = $this->input->post('lastName');
			$nickName = $this->input->post('nickname');

			$data = array(
				'email' => $email,
				'password' => $password,
				'firstName' => $firstName,
				'lastName' => $lastName,
				'nickName' => $nickName
			);

			$this->load->model('users_model');
			$this->users_model->register($data);

		}


		$this->load->view('register');
	}

	public function user_view($id){
		$this->load->model('users_model');
		$data = $this->users_model->view_user($id);


		$this->load->view('user_profile', $data);
	}
}
