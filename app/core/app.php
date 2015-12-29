 <?php 

class App
{

	protected $controller = 'home';

	protected $method = 'index';

	protected $parmas = [];

	public function __construct()
	{
		$this->parseUrl();
	}

	public function parseUrl()
	{
		if(isset($_GET['url'])){
			echo $_GET['url'];
		}
	}
}
 ?>