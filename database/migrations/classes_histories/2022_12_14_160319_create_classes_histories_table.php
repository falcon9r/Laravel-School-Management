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
        Schema::create('classes_histories', function (Blueprint $table) {
            $table->foreignUuid('parent_id')->constrained('classes');
            $table->string('sign' , 1);
            $table->smallInteger('number');
            $table->foreignUuid('who_change');
            $table->boolean('shift')->nullable()->comment('истино: после обеда иначе до');
            $table->foreignUuid('classroom_teacher')->constrained('users')->cascadeOnDelete();
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
        Schema::dropIfExists('classes_histories');
    }
};
