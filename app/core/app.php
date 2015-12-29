<?php 

class App
{

	protected $controller = 'home';

	protected $method = 'index';

	protected $parmas = [];

	public function __construct()
	{
		$this->parse_url();
	}

	public function parseUrl()
	{
		if(isset($GET['='])){
			echo $_GET[url];
		}
	}
}
 ?>