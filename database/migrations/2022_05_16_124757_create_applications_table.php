<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->integer('status')->default(0); //0 черга, 1 розглядається, 2 завершена
            $table->text('text')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('admin_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
