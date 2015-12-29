<?php 

class Home extends Controller
{
	public function index($name = '' , $othre = '')
	{
		echo  $name . ' ' . $othre;
	}
} 
?>