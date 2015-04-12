<?php
									//define('BASE_URL', 'http://example.com');
	//define('base_URL', 'http://licensurelabs.com/wip');

	function baseURL($fd ){

		//$base = $_SERVER['SERVER_NAME'];
		//$name = $_SERVER['REQUEST_URI'];
		//Do not need if base dosen't call root

		// Print Base URL 
		echo ($fd ? 'public/'.$fd.'/' : '' ); //if $fd then print


	}

?>
