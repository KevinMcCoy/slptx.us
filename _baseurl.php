<?php
	//define('BASE_URL', 'http://example.com');
	//define('base_URL', 'http://licensurelabs.com/wip');

	function baseURL($folder){

		$base = $_SERVER['SERVER_NAME']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		$base = $_SERVER['HTTP_HOST']; //string(9) "127.0.0.1"											<--> string(12) "dev.slptx.us"
		$name = $_SERVER['REQUEST_URI']; //string(29) "/slptx.us/public/services.php" <--> string(1) "/"


		// Print Base URL

		if($folder){
			return $folder.'/';
		}

		return $base.$name;

	}

?>
