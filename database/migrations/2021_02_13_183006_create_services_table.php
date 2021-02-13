<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('patient_id')->unsigned();;
            $table->foreign('patient_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('pregnancy_week');
            $table->string('age');
            $table->string('carrying_first_child');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('bp');
            $table->string('have_proteinuria');
            $table->string('have_STI');
            $table->string('have_heart_diseases');
            $table->string('have_kidney_diseases');
            $table->string('have_hypothyroidism');
            $table->string('have_anemia');
            $table->string('have_previous_miscarriage');
            $table->string('have_previous_cs');
            $table->string('is_carrying_twin_or_multiple');
            $table->string('glucose_before_fasting');
            $table->string('glucose_after_fasting');
            $table->text('result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
