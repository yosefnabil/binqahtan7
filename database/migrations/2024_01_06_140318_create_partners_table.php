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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('first_name' );
            $table->string('last_name' );
            $table->string('nationality' );
            $table->string('identity_type' );
            $table->integer('id_number');
            $table->date('expiry_date');
            $table->integer('job');
            $table->integer('ownership_percentage');
            $table->string('country_resident_tax');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->integer('phone');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
