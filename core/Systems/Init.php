<?php
namespace Mframework\Systems;
use Mframework\Systems\Router;

class Init
{
	public function __construnct()
	{
		
	}

	public function start()
	{
		$Router = new Router();
		include APPSPATH.'Config/Route.php';
		echo $Router->run();
	}
}
