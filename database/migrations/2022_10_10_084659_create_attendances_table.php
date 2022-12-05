<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Class_model;
use App\Models\Student;
use App\Models\Session;
use App\Models\subject;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
           $table->foreignIdFor(Student::class);
             $table->foreignIdFor(Class_model::class);
             $table->foreignIdFor(Session::class);
              $table->foreignIdFor(subject::class);
              $table->string('date');
              $table->string('attendance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
};
