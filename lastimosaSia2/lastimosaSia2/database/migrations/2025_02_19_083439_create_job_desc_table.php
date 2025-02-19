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
        Schema::create('job_desc', function (Blueprint $table) {
            $table->id();
            $table->string("Engine_Trouble");
            $table->string("Change_Oil");
            $table->string("UnderChassis_Trouble");
            $table->unsignedBigInteger("cars_ID");
            $table->unsignedBigInteger("mech_acc_ID");
            $table->string("mech_assign");
            $table->string("plate_number");
            $table->string("brand");
            $table->string("model");
            $table->timestamps();

            $table->foreign("cars_ID")->references("id")->on("cars")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("mech_acc_ID")->references("id")->on("mech_acc")->onDelete("cascade")->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_desc');
    }
};
