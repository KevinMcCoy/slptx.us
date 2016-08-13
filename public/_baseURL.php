<?php

	// This function does one of two things:
	// #1) Returns base url path
	// #2) Check if currently running on a live server and returns true/false
	function baseURL($input=false){

		//$base = $_SERVER['SERVER_NAME']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		$base = $_SERVER['HTTP_HOST']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		//$name = $_SERVER['REQUEST_URI']; //string(29) "/slptx.us/public/services.php" <--> string(1) "/"

		// #2 - Check if running live
		if($input == 'live'){
			if($_SERVER['HTTP_HOST'] !== 'localhost' AND $_SERVER['HTTP_HOST'] !== '127.0.0.1'){
				return true;
			}else{
				return false;
			}
		}

		// #1 - Returns base url path
		return dirname($base).'/';
	}

?>
