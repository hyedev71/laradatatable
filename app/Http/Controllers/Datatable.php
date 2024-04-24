<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datatable extends Controller
{
	public function index()
	{
		return view('datatable.index');
	}

	public function clientside()
	{
		return view('datatable.clientside');
	}

	public function serverside()
	{
		return view('datatable.serverside');
	}
}
