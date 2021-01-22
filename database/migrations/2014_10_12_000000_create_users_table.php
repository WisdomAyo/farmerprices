<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('email')->unique()->notNullable();
            $table->longText('title')->nullable();
            $table->longText('users_types_id')->nullable();
            $table->longText('address')->nullable();
            $table->longText('country')->nullable();
            $table->longText('state')->nullable();
            $table->longText('city')->nullable();
            $table->longText('postal_code')->nullable();
            $table->bigInteger('status')->nullable();
            $table->enum('gender', array('M','F'))->nullable();
            $table->date('Date_of_birth')->nullable();
            $table->longText('bio')->nullable();
            $table->longText('images')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('user_level')->nullable();
            $table->longText('phone')->nullable();
            $table->unsignedBigInteger('status_id')->default(0)->index();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('users');
    }
}
