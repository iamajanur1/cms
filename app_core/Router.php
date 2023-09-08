<?php

require_once "Request.php";

/**
 * 
 */
class Router 
{
	protected array $routes = [];

	public Request $request;
	public function __construct($request)
	{
		$this->request = $request;
		
	}
	
	public function get($path,$callback){

		$this->routes['get'][$path] = $callback;
	}
	public function post($path,$callback){

		$this->routes['post'][$path] = $callback;
	}

	public function resolve(){
	 
		$path = $this->request->getPath();
		$method = $this->request->getMethod();
		// echo "<pre>";
		// 		var_dump($path);
		//  		var_dump($this->routes);
		// 		var_dump($this->routes[$method][$path]?? false);
		
		// echo "</pre>";

		$callback = $this->routes[$method][$path] ?? false;

		if($callback === false){
			echo "Not found";
			exit;
		}

		echo call_user_func($callback);

		/*echo "<pre>";
		//var_dump($callback);
		var_dup
		
		echo "</pre>";
		*/
		

	}
}

?>