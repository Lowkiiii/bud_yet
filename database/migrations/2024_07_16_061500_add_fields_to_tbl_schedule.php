<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('tbl_schedule', function (Blueprint $table) {
            // Add new columns
            $table->unsignedBigInteger('from_account_id')->after('user_id');
            $table->unsignedBigInteger('to_account_id')->after('from_account_id');
            $table->decimal('target_amount', 10, 2)->nullable()->after('amount');
            $table->enum('status', ['active', 'completed', 'cancelled'])->default('active')->after('end_date');

            // Add foreign key constraints
            $table->foreign('from_account_id')->references('id')->on('tbl_account')->onDelete('cascade');
            $table->foreign('to_account_id')->references('id')->on('tbl_account')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tbl_schedule', function (Blueprint $table) {
            // Remove foreign key constraints
            $table->dropForeign(['from_account_id']);
            $table->dropForeign(['to_account_id']);

            // Remove columns
            $table->dropColumn('from_account_id');
            $table->dropColumn('to_account_id');
            $table->dropColumn('target_amount');
            $table->dropColumn('status');
        });
    }
};
