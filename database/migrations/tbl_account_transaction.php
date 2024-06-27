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
        Schema::create('tbl_account_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->string('type');
            $table->double('amount');
            $table->date('date');
            $table->timestamps();

            $table->foreign('account_id')->references('id')->on('tbl_account')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->dropForeign('tbl_account_transaction_account_id_foreign');
        });

        Schema::dropIfExists('tbl_account_transaction');
    }
};
