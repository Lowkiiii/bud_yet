<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->string('type')->change();
        });
    }
    
    public function down()
    {
        Schema::table('tbl_account_transaction', function (Blueprint $table) {
            $table->enum('type', ['deposit', 'withdraw'])->change();
        });
    }
};
