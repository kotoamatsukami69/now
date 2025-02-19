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
        Schema::create('checkup_order_type', function (Blueprint $table) {
            $table->id();
            $table->string("checkup_type");
            $table->unsignedBigInteger("checkup_order_category_ID");
            $table->timestamps();

            $table->foreign("checkup_order_category_ID")->references("id")->on("checkup_order_category")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkup_order_type');
    }
};
