<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class ClientSide extends Controller
{
	public function index()
	{
		$staff = Staff::all();

		$view_params = [
			'staff' => $staff,
		];

		return view('datatable.clientside', $view_params);
	}
}
