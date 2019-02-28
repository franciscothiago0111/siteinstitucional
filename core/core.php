<?php
class Core{	

	public function run(){
		//$url = substr($_SERVER['PHP_SELF'], 17);
		//var_dump($url);
		//exit();

		$url = explode("index.php", $_SERVER['PHP_SELF']);
		$url = end($url);

		$params = array();
		if(!empty($url)){
			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0].'Controller';
			array_shift($url);

			if(isset($url[1])){
				$currentAction = $url[1];
				array_shift($url);

				//var_dump($currentController); 
				//var_dump($currentAction);        
				//var_dump($url);
				//exit();	

			} else {
				$currentAction = 'index';
			}

			if(count($url) > 0){
				$params = $url;

			}

		}else {
			$currentController = 'homeController';
			$currentAction = 'index';

		}
		/*

		echo "controller: ".$currentController;
		echo "<br/>action: ".$currentAction;
		echo "</br>";
		echo "<br/>params: ";
		print_r($params);
		exit();
		*/
	require_once 'core/controller.php';

	$c = new $currentController();
	call_user_func_array(array($c, $currentAction), $params);
	

	}


	

}
?>