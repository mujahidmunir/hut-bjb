<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id');
            $table->integer('parent_id');
            $table->string('title');
            $table->string('thumb_desc', 150);
            $table->string('news_slug')->unique();
            $table->string('thumb')->nullable();
            $table->string('icon')->nullable();
            $table->string('attachment')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('deleted_at')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->bigInteger('seen')->default(0);
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
        Schema::dropIfExists('information');
    }
}
