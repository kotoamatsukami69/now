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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string("inventory_name");
            $table->integer("quantity");
            $table->unsignedBigInteger("category_ID");
            $table->unsignedBigInteger("type_ID");
            $table->unsignedBigInteger("size_ID");


            $table->timestamps();

            $table->foreign("type_ID")->references("id")->on("type")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("size_ID")->references("id")->on("size")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("category_ID")->references("id")->on("inventory_category")->onDelete("cascade")->onUpdate("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
