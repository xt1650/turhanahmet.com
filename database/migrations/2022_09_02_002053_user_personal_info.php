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
        Schema::create('user_personal_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->collation = 'utf8mb4_turkish_ci';
            $table->id();
            $table->integer('user_id');
            $table->string('first_name',255)->nullable();
            $table->string('last_name',255)->nullable();
            $table->date('birthday')->nullable();
            $table->tinyText('adress')->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('linkedin',255)->nullable();
            $table->string('twitter',255)->nullable();
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
