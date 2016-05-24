<?php if(!defined("BASEPATH")) exit("No direct script access allowed");

class Regist extends CI_Controller {

	function __construct() {
		parent::__construct();
		ini_set("max_execution_time",300);
	}
	
	function index() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			$this->load->view("regist/content");
		} else {
			header("location:".site_url()."dashboard");
		}
	}
	
}

/* End of file Regist.php */
/* Location: ./app/component/modules/Regist/controllers/Regist.php */