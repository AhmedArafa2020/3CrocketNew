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
        Schema::create('new_about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('sm_title')->nullable();    // Small title (e.g., Know About Us)
            $table->string('big_title')->nullable();   // Main title (e.g., Why Choose 3C?)
            $table->text('description')->nullable();   // Main paragraph
            $table->string('image')->nullable();       // Main image path
            $table->string('overview_icon')->nullable();    // Overview icon
            $table->string('overview_number')->nullable();  // Overview number (e.g., 2k+)
            $table->string('overview_text')->nullable();    // Overview text (e.g., Full Time Student)
            $table->string('btn_text')->nullable();   // Button text (e.g., Book Now)
            $table->string('btn_link')->nullable();   // Button link
            $table->json('feature_cards')->nullable();  // Store feature card data as JSON

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
        Schema::dropIfExists('new_about_sections');
    }
};
