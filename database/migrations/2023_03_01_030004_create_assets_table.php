<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\CustomConstants;

return new class extends Migration
{
    protected $asset_types = [
        'img_front_left',
        'img_front_right',
        'img_rear_left',
        'img_rear_right',
        'img_interior',
        'img_engine',
        'img_chassis',
        'doc_invoice',
        'doc_export_certificate',
        'doc_auction_report'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained()->cascadeOnDelete();
            $table->enum('asset_type', $this->asset_types);
            $table->string('location')->nullable();
            $table->string('file_type');
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
        Schema::dropIfExists('assets');
    }
};
