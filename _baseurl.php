<?php
	function baseURL($input){

		//$base = $_SERVER['SERVER_NAME']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		$base = $_SERVER['HTTP_HOST']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		//$name = $_SERVER['REQUEST_URI']; //string(29) "/slptx.us/public/services.php" <--> string(1) "/"

		//  Check if running live
		if($input == 'live'){
			if($_SERVER['HTTP_HOST'] !== 'localhost' AND $_SERVER['HTTP_HOST'] !== '127.0.0.1'){
				return true;
			}else{
				return false;
			}
		}

		// return basename($name).'/'; //
		// return pathinfo($name).'/'; //
		// return realpath($name).'/'; //
		return dirname($base).'/';
	}

?>
