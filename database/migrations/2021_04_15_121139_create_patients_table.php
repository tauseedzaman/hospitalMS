<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("gender")->nullable();
            $table->string("age")->nullable();
            $table->string('bloodgroup')->nullable();
            $table->string("photo_path")->nullable();
            $table->enum("status", ["admitted", "discharged", "pending"])->default("pending");
            $table->string("image")->nullable();
            $table->string("description")->nullable();
            $table->string("disease")->nullable();
            $table->string("doctor")->nullable();
            $table->string("admit_date")->nullable();
            $table->string("discharge_date")->nullable();
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
        Schema::dropIfExists('patients');
    }
}
