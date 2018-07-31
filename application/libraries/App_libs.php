<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_libs {
	
	private $ci;
	
	function __construct()
	{
		$this->ci =& get_instance();
	}
	
	function session_group($sessions)
	{
		if (!in_array($this->ci->session->userdata('role'),$sessions)){
			redirect(base_url());
		}
	}
	
	function check_auth()
	{
		if (!$this->ci->session->userdata('role')){
			redirect(base_url());
		}
	}
}