<?php if(!defined("BASEPATH")) exit("No direct script access allowed");

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		ini_set("max_execution_time",300);
		$this->load->library("encryption");
		
		$this->encryption->initialize(
			array(
				"cipher"=>$this->config->item("cipher"),
				"mode"=>$this->config->item("mode"),
				"key"=>hex2bin($this->config->item("key")),
				"hmac_digest"=>$this->config->item("hmac_digest"),
                "hmac_key"=>hex2bin($this->config->item("hmac_key"))
			)
		);
	}
	
	function index() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			$this->load->library("random_string");
			$data["TkLogin"] = $this->random_string->random_str();
			$this->session->set_userdata($data);
			
			$this->load->view("login/content",$data);
		} else {
			header("location:".site_url()."dashboard");
		}
	}
	
	function clog() {
		$this->load->library("ws_config");
		
		/*$captcha_answer = $this->input->post('g-recaptcha-response');
		$response = $this->recaptcha->verifyResponse($captcha_answer);
		
		if ($response['success']) {*/
			if ($this->input->post("tklogin") == $this->session->userdata("TkLogin")) {
				$this->form_validation->set_rules("email","Email","required|xss_clean|prep_for_form|encode_php_tags");
				$this->form_validation->set_rules("password","Password","required|xss_clean|prep_for_form|encode_php_tags");
				$this->form_validation->set_error_delimiters("<div class='alert alert-dismissable alert-warning'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<center>","</center>
				</div>");
		
				if($this->form_validation->run() == false) {
					$this->index();
				} else {
					$u = $this->input->post("email");
					$p = $this->input->post("password");
					
					$getUser = $this->ws_config->getdata($this->config->item("login_ws_getuser").urlencode($u));
					
					if($getUser['status'] == true) {
						$getPass = $this->ws_config->getdata($this->config->item("login_ws_getpass").urlencode($u));
							
						if($p == $this->encryption->decrypt($getPass['data']['0']['password'])) {
							$getActiv = $this->ws_config->getdata($this->config->item("login_ws_getactiv").urlencode($u));
							
							if($getActiv['status'] == true) {
								$this->load->library("random_string");
								$rString = $this->random_string->random_str();
							
								$data["iSysLog"] = $rString;
								$data["iSysUser"] = $getActiv['data']['0']['user_id'];
								$data["iSysName"] = $getActiv['data']['0']['name'];
								$data["iSysLvl"] = $getActiv['data']['0']['level'];
								$data["iSysCid"] = $getActiv['data']['0']['branch_id'];
								$data["iSysTimeZ"] = $getActiv['data']['0']['timezone'];
								$data["iSysStock"] = $getActiv['data']['0']['min_stock'];
								$data["iSysPrest"] = $getActiv['data']['0']['prest'];
								$this->session->set_userdata($data);
								
								header("location:".site_url()."dashboard");
							} else {
								$this->session->set_flashdata("wactiv","<div class='alert alert-dismissable alert-warning'>".
									"<a href='#' class='close' data-dismiss='alert'>&times;</a><center>Please Wait For a While, Your Account On Activation</center>". 
								"</div>");	
							
								header("location:".base_url());
							}
						} else {
							$this->session->set_flashdata("wpass","<div class='alert alert-dismissable alert-warning'>".
								"<a href='#' class='close' data-dismiss='alert'>&times;</a><center>Password is wrong</center>". 
							"</div>");
					
							header("location:".base_url());
						}
					} else {
						$this->session->set_flashdata("wuser","<div class='alert alert-dismissable alert-warning'>".
							"<a href='#' class='close' data-dismiss='alert'>&times;</a><center>Username is wrong</center>". 
						"</div>");
					
						header("location:".base_url());
					}
				}
			} else {
				$this->session->set_flashdata("tlogin","<div class='alert alert-dismissable alert-danger'>".
					"<a href='#' class='close' data-dismiss='alert'>&times;</a><center>You're Not Authorized</center>". 
				"</div>");
				
				header("location:".base_url());
			}
		/*} else {
			$this->session->set_flashdata("tlogin","<div class='alert alert-dismissable alert-danger'>".
				"<a href='#' class='close' data-dismiss='alert'>&times;</a><center>Please Select Captcha</center>". 
			"</div>");
			
			header("location:".base_url());
		}*/
		
		$this->session->unset_userdata("TkLogin");
	} 
	
	function logout() {
		$sesi = $this->session->userdata("iSysLog");
		
		if(empty($sesi)) {
			$this->index();
		} else {
			$ses_param = array("iSysLog","iSysUser","iSysName","iSysLvl","iSysCid","iSysTimeZ","iSysStock","iSysPrest");
			$this->session->unset_userdata($ses_param);
			$this->index();
		}
	}
	
}

/* End of file Login.php */
/* Location: ./app/component/modules/Login/controllers/Login.php */