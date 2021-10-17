<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->dateTime('request_date')->nullable();
            $table->string('option1');
            $table->string('option2');
            $table->string('option3');
            $table->string('option4');
            $table->string('option5');
            $table->string('option6');
            $table->string('option7');
            $table->string('option8');
            $table->string('option9');
            $table->string('option10');
            $table->string('option11');
            $table->string('option12');
            $table->string('option13');
            $table->string('option14');
            $table->string('option15');
            $table->string('option16');
            $table->string('option17');
            $table->string('option18');
            $table->string('option19');
            $table->string('option20');
            $table->string('option21');
            $table->string('option22');
            $table->string('option23');
            $table->string('option24');
            $table->string('option25');
            $table->string('option26');
            $table->string('option27');
            $table->string('option28');
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
        Schema::dropIfExists('surveys');
    }
}
