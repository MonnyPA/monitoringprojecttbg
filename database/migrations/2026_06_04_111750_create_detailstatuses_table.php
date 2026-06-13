<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detailstatuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('statusproject_id');
            $table->string('detail');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('statusproject_id')->references('id')->on('statusprojects');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detailstatuses');
    }
};
