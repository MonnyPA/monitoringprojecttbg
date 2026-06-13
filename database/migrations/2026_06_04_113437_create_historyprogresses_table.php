<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('historyprogresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('datasite_id');
            $table->text('detail');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('datasite_id')->references('id')->on('datasites');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('historyprogresses');
    }
};
