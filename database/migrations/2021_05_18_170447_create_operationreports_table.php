<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationreportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operationreports', function (Blueprint $table) {
            $table->id();
            $table->foreignId("patient_id")->constrained()->cascadeOnDelete();
            $table->text("description");
            $table->foreignId("doctor_id")->constrained()->cascadeOnDelete();
            $table->enum("status", ["pending", "completed"])->default("pending");
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
        Schema::dropIfExists('operationreports');
    }
}
