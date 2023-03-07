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
            $table->datetime('application_date')->nullable();
            $table->string('status')->nullable();
            $table->string('approval_type')->nullable();
            $table->string('vass_engineering')->nullable();
            $table->datetime('arrival_date')->nullable();
            $table->string('chassis_no')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->datetime('build_date')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('transmission')->nullable();
            $table->string('body_type')->nullable();
            $table->string('drive_type')->nullable();
            $table->string('seats')->nullable();
            $table->string('additional_info')->nullable();
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
