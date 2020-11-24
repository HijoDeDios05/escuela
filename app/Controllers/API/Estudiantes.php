<?php namespace App\Controllers\API;

use CodeIgniter\RESTful\ResourceController;
class Clientes extends ResourceController    
{
	public function index()
	{
		return view('welcome_message');
	}

	
}
