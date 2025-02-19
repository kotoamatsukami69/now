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
        Schema::create('checkup_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("checkup_desc_id");
            $table->string("inventory_item_name");
            $table->integer("quantity");
            $table->unsignedBigInteger("mech_acc_id");
            $table->enum("status" , ["Pending" , "Hand Over"]  );
            $table->timestamps();

            $table->foreign("checkup_desc_id")->references("id")->on("checkupdesc")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("mech_acc_id")->references("id")->on("mech_acc")->onDelete("cascade")->onUpdate("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkup_requests');
    }
};
