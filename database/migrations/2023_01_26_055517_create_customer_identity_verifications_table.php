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
        Schema::create('customer_identity_verifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->enum('sex', ['male', 'female']);
            #Address
            $table->string('province');
            $table->string('district');
            $table->string('subdistrict');
            $table->string('detail');
            $table->string('postal_code');
            #EndAdress
            $table->string('photo');
            $table->string('identity_photo');
            $table->enum('status', ['Unverified', 'Verified', 'Rejected'])->default('Unverified');
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
        Schema::dropIfExists('customer_identity_verifications');
    }
};
