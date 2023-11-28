<?php 
$controller = 'user';
$function = 'login';

if (isset($_GET['controller']) && $_GET['controller'] != '' ) {
	$controller = $_GET['controller'];
}
if (isset($_GET['function']) && $_GET['function'] != '' ) {
	$function = $_GET['function'];
}

if (file_exists('controller/'.$controller.'.php')) {
	include('controller/'.$controller.'.php');
	$class = $controller.'Controller';
	$obj = new $class();
	if(method_exists($class, $function)){
		$obj->$function();
	}else{
		echo "Page Not found";
	}
	
}else{
	echo 'Page not found';
}

?>
