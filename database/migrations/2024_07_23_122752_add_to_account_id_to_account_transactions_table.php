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
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('to_account_id')->nullable()->after('account_id');
            $table->foreign('to_account_id')->references('id')->on('tbl_account')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->dropForeign(['to_account_id']);
            $table->dropColumn('to_account_id');
        });
    }
};
