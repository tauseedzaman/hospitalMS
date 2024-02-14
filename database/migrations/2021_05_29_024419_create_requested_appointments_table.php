<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestedAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requested_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->default('text');
            $table->string('email', 150)->nullable()->default('text');
            $table->string('phone', 13);
            $table->string('address', 150);
            $table->foreignId("doctor_id")->constrained()->cascadeOnDelete();
            $table->string('message', 600)->default('text');
            $table->timestamp('stime')->nullable();
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
        Schema::dropIfExists('requested_appointments');
    }
}
