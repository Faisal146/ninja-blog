<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('image')->default('default.jpg');
            $table->string('status')->default('deactive');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('categories'); // Drops the posts table
    }
};
