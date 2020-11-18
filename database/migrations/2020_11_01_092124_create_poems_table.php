<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id')->constrained()->onDelete('cascade');
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->unsignedBigInteger('genre_id')->nullable()->onDelete('set null');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('poems');
    }
}
