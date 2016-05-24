<?php if(!defined("BASEPATH")) exit("No direct script access allowed");

class Master_category extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		ini_set("max_execution_time",300);
		date_default_timezone_set($this->session->userdata("iSysTimeZ"));
	}
	
	function index() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			header("location:".base_url());
		} else {
			$d["title"] = "Master Categories";
			$dc['userid'] = $this->session->userdata("iSysUser");
			$dc['prest'] = $this->session->userdata("iSysPrest");
			$dc['branchid'] = $this->session->userdata("iSysCid");
			$dc['user'] = $this->session->userdata("iSysName");
			$dc['kname'] = $this->config->item("SKY_FIELD");
			$dc['k'] = $this->config->item("SKY");
			$dc['category_get'] = $this->config->item("category_ws_get");
			$dc['category_add'] = $this->config->item("category_ws_add");
			$dc['category_edit'] = $this->config->item("category_ws_edit");
			$dc['category_del'] = $this->config->item("category_ws_del");
			
			$this->load->view("temp_trans/header",$d);
			$this->load->view("temp_trans/menu");
			$this->load->view("master_category/content",$dc);
			$this->load->view("temp_trans/footer");
		}
	}
	
}

/* End of file Master_category.php */
/* Location: ./app/component/modules/Master_category/controllers/Master_category.php */