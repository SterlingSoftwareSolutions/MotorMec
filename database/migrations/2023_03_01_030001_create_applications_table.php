<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $application_statuses = [
        'draft',
        'in-review',
        'submitted',
        'via-approved',
        'in-compliace',
        'completed',
        'rejected'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {

            // Meta fields
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->datetime('application_date')->nullable();
            $table->enum('status', $this->application_statuses);

            // User filled fields
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

            // Admin filled fields

            // -- filled when marking an application as submitted
            $table->string('model_report_holder')->nullable();
            $table->string('model_report_name')->nullable();
            $table->string('sev')->nullable();
            $table->string('submission_reference_number')->nullable();

            // -- filled when admin uploads the VIA
            $table->string('approval_number')->nullable();
            $table->string('vin')->nullable();

            // -- filled when admin uploads the compliance
            $table->string('compliance_reference_number')->nullable();

            // -- additional details, can be filled at any time
            // -- by editing the application
            $table->boolean('mr_udn_requested')->nullable();
            $table->string('udn_number')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('tare_mass')->nullable();
            $table->string('power_kw')->nullable();

            // Timestamps
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
