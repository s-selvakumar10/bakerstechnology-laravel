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
        Schema::create('visitors', function (Blueprint $table) {
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
            $table->string('industry')->nullable()->default(null);
            $table->string('purpose_of_attendance')->nullable()->default(null);
            $table->string('products_of_interest')->nullable()->default(null);
            $table->string('expo_referral_source')->nullable()->default(null);
            $table->integer('accept_promotional_updates')->nullable()->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
