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
        Schema::create('business_matchmakings', function (Blueprint $table) {
            $table->id();
            $table->string('name_prefix')->nullable()->default(null);
            $table->string('first_name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('mobile')->nullable()->default(null);
            $table->string('company_name')->nullable()->default(null);
            $table->string('products_of_interest')->nullable()->default(null);
            $table->string('description')->nullable()->default(null);
            $table->dateTime('date')->nullable()->default(null); // Assuming date field is a date type
            $table->string('department')->nullable()->default(null);
            $table->string('designation')->nullable()->default(null);
            $table->string('company_address')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('company_website')->nullable()->default(null);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_matchmakings');
    }
};
