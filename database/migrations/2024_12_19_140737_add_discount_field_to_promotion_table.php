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
        Schema::table('promotions', function (Blueprint $table) {
            $table->integer('discountValue')->default(0); // Regular integer column with a default value
            $table->string('discountType', 10); // String column with a maximum length of 10
            $table->integer('maxDiscountValue'); // Regular integer column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('promotions', function (Blueprint $table) {
            $table->dropColumn(['discountValue', 'discountType', 'maxDiscountValue']);
        });
    }
};
