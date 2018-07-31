<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	protected $data;
	function __construct()
	{
		parent:: __construct();
		
	}
	function render($content)
	{
		$this->data['header'] = $this->load->view('layout/header',$this->data,true);
	}
}