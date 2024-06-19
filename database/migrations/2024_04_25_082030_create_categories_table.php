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
        Schema::create('categories', function (Blueprint $table) {
            $table->ctgr_id();
            $table->string('name');
            $table->string('ctgr_desc');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
			$table->dropColumn('product_category');
			$table->foreignId('id_category')->references('ctgr_id')->on('categories');
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
