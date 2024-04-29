<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Staff;
use App\Models\Position;
use App\Models\Office;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		Position::create(["position_name" => "Accountant", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Chief Executive Officer (CEO)", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Chief Financial Officer (CFO)", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Chief Marketing Officer (CMO)", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Chief Operating Officer (COO)", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Customer Support", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Data Coordinator", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Developer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Development Lead", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Director", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Financial Controller", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Integration Specialist", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Javascript Developer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Junior Javascript Developer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Junior Technical Author", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Marketing Designer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Office Manager", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Personnel Lead", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Post-Sales Support", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Pre-Sales Support", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Regional Director", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Regional Marketing", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Sales Assistant", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Secretary", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Senior Javascript Development", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Senior Marketing Designer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Software Engineer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "System Administrator", "position_desc" => "test data..."]);
		Position::create(["position_name" => "System Architect", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Support Engineer", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Team Leader", "position_desc" => "test data..."]);
		Position::create(["position_name" => "Technical Author", "position_desc" => "test data..."]);

		Office::create(["office_name" => "Edinburgh", "office_desc" => "test data..."]);
		Office::create(["office_name" => "London", "office_desc" => "test data..."]);
		Office::create(["office_name" => "New York", "office_desc" => "test data..."]);
		Office::create(["office_name" => "San Francisco", "office_desc" => "test data..."]);
		Office::create(["office_name" => "Sidney", "office_desc" => "test data..."]);
		Office::create(["office_name" => "Singapore", "office_desc" => "test data..."]);
		Office::create(["office_name" => "Tokyo", "office_desc" => "test data..."]);

		$faker = Faker::create();

		for ($i = 0; $i < 100; $i++) {
			DB::table('staff')->insert([
				'fullname' => $faker->name(),
				'position' => Position::all()->random()->position_name,
				'office' => Office::all()->random()->office_name,
				'age' => $faker->numberBetween(18, 40),
				'start_date' => fake()->dateTimeBetween('-2 year', '-1 year'),
				'salary' => $faker->numberBetween(1800, 5000),
				'created_at' => now(),
				'updated_at' => now(),
			]);		
		}
    }
}
