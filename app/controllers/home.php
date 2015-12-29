<?php 

class Home extends Controller
{
	public function index($name = '' , $othre = '')
	{
		$user = $this->model('User');
		$user->name = $name;
		echo $user->name;
	}
} 
?>