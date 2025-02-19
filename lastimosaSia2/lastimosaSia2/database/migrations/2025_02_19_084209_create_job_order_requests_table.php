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
        Schema::create('job_order_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("job_desc_id");
            $table->string("inventory_item_name");
            $table->integer("quantity");
            $table->unsignedBigInteger("mech_acc_id");
            $table->enum("status" , ["Pending" , "Hand Over"]);
            $table->date("request_date");
            $table->unsignedBigInteger("size_ID");
            $table->unsignedBigInteger("type_ID");
            $table->timestamps();

            $table->foreign("job_desc_id")->references("id")->on("job_desc")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("mech_acc_id")->references("id")->on("mech_acc")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("size_ID")->references("id")->on("size")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("type_ID")->references("id")->on("type")->onDelete("cascade")->onUpdate("cascade");




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_order_requests');
    }
};
