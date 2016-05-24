<?php if(!defined("BASEPATH")) exit("No direct script access allowed");

class Forgot extends CI_Controller {

	function __construct() {
		parent::__construct();
		ini_set("max_execution_time",300);
	}
	
	function index() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			$this->load->view("forgot/content");
		} else {
			header("location:".site_url()."dashboard");
		}
	}
	
}

/* End of file Forgot.php */
/* Location: ./app/component/modules/Login/controllers/Forgot.php */