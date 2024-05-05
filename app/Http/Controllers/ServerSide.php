<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class ServerSide extends Controller
{
	public function index()
	{
		return view('datatable.serverside');
	}

	public function getData()
	{
		return datatables()->of(Staff::all())->toJson();
	}
}
