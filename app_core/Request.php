<?php

/**
 * 
 */
class Request 
{
	public function getPath(){
		
		$path = $_SERVER['REQUEST_URI'] ?? "/"; // Super Globel variable 
		$position = strpos($path, '?');
		
		// echo "<pre>";
		// 		//var_dump($path);
		//  		var_dump($_SERVER);
		
		// echo "</pre>";
		// exit;
		
		if($position === false){			
			return $path;
		}

		return substr($path,0,$position); // 
	}

	public function getMethod(){
		return strtolower($_SERVER['REQUEST_METHOD']);
	}
}

?>