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
        Schema::create('mech_acc', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("password");
            $table->Integer("contact_number");
            $table->string("nickname");
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mech_acc');
    }
};
