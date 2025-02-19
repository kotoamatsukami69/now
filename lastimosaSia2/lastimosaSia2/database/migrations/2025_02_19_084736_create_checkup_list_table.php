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
        Schema::create('checkup_list', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("checkupDesc_ID");
            $table->unsignedBigInteger("mech_acc_ID");
            $table->enum("checkup_list" , ["Pending", "In Progress", "Completed"]);
            $table->date("date_assigned");
            $table->date("date_started");
            $table->date("date_done");
            $table->timestamps();

            $table->foreign("checkupDesc_ID")->references("id")->on("checkupdesc")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("mech_acc_ID")->references("id")->on("mech_acc")->onDelete("cascade")->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkup_list');
    }
};
