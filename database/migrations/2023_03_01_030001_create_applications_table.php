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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->datetime('application_date')->unique()->nullable();
            $table->string('status')->unique()->nullable();
            $table->string('approval_type')->unique()->nullable();
            $table->string('vass_engineering')->unique()->nullable();
            $table->datetime('arrival_date')->unique()->nullable();
            $table->string('chassis_no')->unique()->nullable();
            $table->string('make')->unique()->nullable();
            $table->string('model')->unique()->nullable();
            $table->datetime('build_date')->unique()->nullable();
            $table->string('fuel_type')->unique()->nullable();
            $table->string('transmission')->unique()->nullable();
            $table->string('body_type')->unique()->nullable();
            $table->string('drive_type')->unique()->nullable();
            $table->string('seats')->unique()->nullable();
            $table->string('additional_info')->unique()->nullable();
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
        Schema::dropIfExists('applications');
    }
};
