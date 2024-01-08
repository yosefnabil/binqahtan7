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
        Schema::create('national_posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('address_id');
            $table->string('country' );
            $table->string('city' );
            $table->string('district');
            $table->string('region' );
            $table->string('street_name' );
            $table->string('building_number' );
            $table->string('unit_number' );
            $table->string('additional_code' );
            $table->string('zip_code' );
            $table->foreign('address_id')->references('id')->on('addresses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('national_posts');
    }
};
