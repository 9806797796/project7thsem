<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateds', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('blood_group');
            
            $table->timestamp('donate_date');
            $table->string('donate_at')->nullable();
            $table->enum('issue_status',['N', 'Y'])->default('N');
            $table->string('issue_to')->nullable();
            $table->integer('requestedblood_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donateds');
    }
};
