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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('country');
            $table->string('city');
            $table->string('district');
            $table->string('street_name' );
            $table->string('mailbox' );
            $table->string('zip_code' );
            $table->integer('fax');
            $table->integer('phone');
            $table->string('email');
            $table->string('website');
            $table->string('address_place' );
            $table->string('person_name' );
            $table->string('person_nationality' );
            $table->integer('person_Mobile_number');
            $table->integer('person_phone');
            $table->string('person_email' );
            $table->integer('person_fax');
            $table->foreign('company_id')->references('id')->on('companies');

            //	District	Street_name	mailbox	zip_code	fax	phone	email	website	address_place	person_name	person_nationality	person_Mobile_number	person_phone	person_email	person_fax
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
