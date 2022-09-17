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
        Schema::create('profile_setting', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->collation = 'utf8mb4_turkish_ci';
            $table->id();
            $table->integer('user_id');
            $table->string('background_image',255)->nullable();
            $table->string('profile_image',255)->nullable();
            $table->boolean('profile_visibility')->nullable()->default(true);
            $table->string('profile_title',200)->nullable();
            $table->string('location',155)->nullable();
            $table->tinyText('bio')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->tinyInteger('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
