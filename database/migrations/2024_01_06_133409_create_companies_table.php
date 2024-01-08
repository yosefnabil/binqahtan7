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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_ID');
            $table->string('name');
            $table->unsignedBigInteger('license_number')->uniqid();
            $table->string('issuing_country');
            $table->string('issuing_city');
            $table->date('issuing_date');
            $table->date('expiry_date');
            $table->string('company_type');
            $table->string('company_origin');
            $table->unsignedBigInteger('dealings_volume');
            $table->text('account_purpose');
            $table->string('account _statement');
            $table->string('preferred_language');
            $table->foreign('user_ID')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
