<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datatable extends Controller
{
	public function index()
	{
		return view('datatable.index');
	}
}
