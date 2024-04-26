<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use HasFactory, SoftDeletes;

	public $table = "staff";

	protected $primaryKey = "staff_id";

	protected $fillable = [
		'fullname',
		'position',
		'office',
		'age',
		'start_date',
		'salary',
	];
}
