<?php 

class Ws_config {
	
	function getdata($url) {
		$this->ci = & get_instance();
		$curl = curl_init();
		curl_setopt($curl,CURLOPT_URL,$url);
		curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"get");
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);
		//curl_setopt($curl, CURLOPT_CAINFO,"C:\Program Files (x86)\Git\bin\curl-ca-bundle.crt");
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($curl,CURLOPT_HTTPHEADER,array(
			"Content-Type: application/json",
			$this->ci->config->item("SKY_FIELD")." : ".$this->ci->config->item("SKY")
		));

		$result = curl_exec($curl);
		curl_close($curl);
		
		return json_decode($result,true);
	}
}

?>