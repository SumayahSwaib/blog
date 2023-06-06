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
        Schema::create('news_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title','255');
            $table->text('photo')->nullable();
            $table->longText('details');
            $table->integer('view')->default(0)->nullable();
            $table->integer('user_id')->default(1);
            $table->integer('category_id')->default(1);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_posts');
    }
};
