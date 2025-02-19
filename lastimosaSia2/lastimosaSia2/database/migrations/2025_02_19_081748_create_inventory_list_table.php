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
        Schema::create('inventory_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("inventory_ID");
            $table->timestamps();

            $table->foreign("inventory_ID")->references("id")->on("inventory")->onDelete("cascade")->onUpdate("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_list');
    }
};
