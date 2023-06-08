<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('alias');
            $table->string('image');
            $table->string('details_image');
            $table->string('principal_researcher'); 
            $table->string('center');
            $table->foreignId('category_id');
            $table->text('description');
            $table->text('objectives');
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('research');
    }
}
