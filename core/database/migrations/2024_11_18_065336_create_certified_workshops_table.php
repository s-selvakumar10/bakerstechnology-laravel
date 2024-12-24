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
        Schema::create('certified_workshops', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('designation')->nullable()->default(null);
            $table->string('company_name')->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('country')->nullable()->default(null);
            $table->string('zip_code')->nullable()->default(null);
            $table->string('mobile')->nullable()->default(null);
            $table->string('whatsapp_number')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('website')->nullable()->default(null);
            $table->string('industry')->nullable()->default(null);
            $table->integer('all_days')->comment('0 = No, 1 = Yes')->nullable()->default(0);
            $table->json('days')->comment('1 = Day 1, 2 = Day 2, 3 = Day 3')->nullable();
            $table->string('utr_number')->nullable()->default(null);
            $table->decimal('paid_amount')->nullable()->default(0);
            $table->string('attachment')->nullable()->default(null);
            $table->integer('is_pass_sent')->comment('0 = No, 1 = Yes')->nullable()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certified_workshops');
    }
};
