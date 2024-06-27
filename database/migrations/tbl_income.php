<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up(): void
    {
        Schema::create('tbl_income', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->double('amount');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('tbl_income_category')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_income', function (Blueprint $table) {
            $table->dropForeign('tbl_income_category_id_foreign');
        });

        Schema::dropIfExists('tbl_income');
    }
};
