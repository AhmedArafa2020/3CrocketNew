<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accreditation_sections', function (Blueprint $table) {
            $table->id();
            $table->string('sm_title')->nullable();
            $table->string('big_title')->nullable();
            $table->text('description')->nullable();
            $table->json('logos')->nullable(); // To store logo paths as array
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
        Schema::dropIfExists('accreditation_sections');
    }
};
