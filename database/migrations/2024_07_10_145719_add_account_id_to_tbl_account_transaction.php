<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('account_id')->after('user_id');
            $table->foreign('account_id')->references('id')->on('tbl_account')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->dropForeign(['account_id']);
            $table->dropColumn('account_id');
        });
    }
};
