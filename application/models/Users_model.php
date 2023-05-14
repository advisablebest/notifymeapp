<?php

Class Users_model extends CI_Model
{
	public function register($data)
	{
		$this->load->database();
		$this->db->insert('users', $data);
	}

	public function view_user($id)
	{
		$this->load->database();
		$result = $this->db->from('users')->where('id', $id)->get()->result_array();

		return $result;
	}
}
