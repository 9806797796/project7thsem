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
        Schema::create('requestedbloods', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('pname');
            $table->integer('page');
            $table->enum('pgender', ['Male', 'Female', 'Other']);
            $table->string('pprovince');
            $table->string('pdistrict');
            $table->string('pminicipality');
            $table->integer('pwordno');
            $table->string('pcity');
            $table->string('ptole');
            $table->string('hospitalname');
            $table->string('hospitaladdress');
            $table->string('requestedblood');
            $table->integer('requestedbloodunit');
            $table->datetime('requesteddatetime');
            $table->string('refno')->nullable();
            $table->enum('accpected', ['Yes', 'No'])->nullable();
            $table->text('bloodbankmessage')->nullable();
            $table->enum('delivered', ['Yes', 'No'])->nullable();
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
        Schema::dropIfExists('requestedbloods');
    }
};
