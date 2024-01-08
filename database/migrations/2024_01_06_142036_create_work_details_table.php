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
        Schema::create('work_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('activity_type');
            $table->date('start_business_date');
            $table->integer('number_employees');
            $table->integer('number_branches');
            $table->string('activited _geographic_area');
            $table->string('capital_source');
            $table->string('other_activities_revenues');
            $table->integer('total_value');
            $table->integer('number_repetitions');
            $table->string('activity name');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_details');
    }
};
