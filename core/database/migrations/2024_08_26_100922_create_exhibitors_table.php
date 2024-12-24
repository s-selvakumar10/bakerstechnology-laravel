<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exhibitors', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('organization')->nullable()->default(null);
            $table->string('designation')->nullable()->default(null);
            $table->string('mobile')->nullable()->default(null);
            $table->string('whatsapp_number')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('company_address')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('stand_space')->nullable()->default(null);
            $table->string('sponsorship')->nullable()->default(null);
            $table->string('advertisement')->nullable()->default(null);
            $table->string('others')->nullable()->default(null);
            $table->integer('accept_promotional_updates')->nullable()->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitors');
    }
};
