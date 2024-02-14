<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("phone");
            $table->string("salary")->nullable();
            $table->string("address")->nullable();
            $table->string("qualification")->nullable();
            $table->enum("position", ["nurse", "doctor", "accountant", "pharmacist", "receptionist", "cleaner", "security", "other"])->default("other");
            $table->enum("status", ["active", "inactive"])->default("active");
            $table->string("image")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
