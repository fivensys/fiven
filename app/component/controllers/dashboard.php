<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		ini_set("max_execution_time",300);
	}
	
	function index() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			header("location:".base_url());
		} else {
			$d["title"] = "Dashboard";
			
			$this->load->view("temp_trans/header",$d);
			$this->load->view("temp_trans/menu");
			$this->load->view("dashboard/content");
			$this->load->view("temp_trans/footer");
		}
	}
	
}

/* End of file dashboard.php */
/* Location: ./app/component/modules/dashboard/controllers/dashboard.php */