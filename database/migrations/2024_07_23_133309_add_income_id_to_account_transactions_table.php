<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->unsignedBigInteger('income_id')->nullable()->after('account_id');
            $table->foreign('income_id')->references('id')->on('tbl_income')->onDelete('set null');
        });
    }
    
    public function down()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->dropForeign(['income_id']);
            $table->dropColumn('income_id');
        });
    }
};
