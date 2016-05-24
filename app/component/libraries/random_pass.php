<?php 

class Random_pass {
	
	function random_pwd() {

		$digit = 5;
		$char = "ABCDEFGHJKLMNPQRSTUVWXYZ123456789";

		srand((double)microtime() * 1000000);
	
		$i = 0;
		$pass = "";
	
		while ($i <= $digit-1) {
			$num = rand() % 32;
			$tmp = substr($char, $num, 1);
			$pass = $pass.$tmp;
			$i++;
		}
		return $pass;
	}
	
}

?>