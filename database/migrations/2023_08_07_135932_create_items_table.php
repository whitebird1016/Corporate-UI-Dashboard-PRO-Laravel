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
        //make me a schema create where items has the following columns : id, item name, photo, category, description, tags, status(radio), options(checkbox) and date

        Schema::create('items', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('photo');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('description');
            $table->string('status');
            $table->string('options');
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
