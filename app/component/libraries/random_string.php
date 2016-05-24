<?php 

class Random_string {
	
	function random_str() {
		$result = md5(uniqid(rand(),true)); 
		
		return $result; 
	}
}

?>