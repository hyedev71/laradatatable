<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('staff_id');
			$table->string('fullname');
			$table->string('position');
			$table->string('office');
			$table->integer('age');
			$table->date('start_date');
			$table->decimal('salary', 15, 2);
            $table->timestamps();
			$table->softDeletes();

			$table->index('fullname');
			$table->index('position');
			$table->index('office');
			$table->index('age');
			$table->index('start_date');
			$table->index('salary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff');
    }
};
