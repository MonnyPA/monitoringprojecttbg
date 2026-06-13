<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('datasites', function (Blueprint $table) {
            $table->id();
            $table->string('site_id')->unique();
            $table->string('site_name');
            $table->string('long');
            $table->string('lat');
            $table->string('kabupaten');
            $table->unsignedBigInteger('mitra_id');
            $table->unsignedBigInteger('statusproject_id');
            $table->string('catatan');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('statusproject_id')->references('id')->on('statusprojects');
            $table->foreign('mitra_id')->references('id')->on('mitras');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('datasites');
    }
};
