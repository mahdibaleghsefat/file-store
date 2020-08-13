<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Baleghsefat\User\Models\User;

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
            $table->string('name', 100)->nullable();
            $table->string('lastName', 100)->nullable();
            $table->string('fullName', 100)->nullable();
            $table->string('mobile', 15)->unique()->index()->nullable();
            $table->string('username', 15)->unique()->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('mobile_verified_at')->nullable();
            $table->string('password', 255)->nullable();
            $table->enum('role', User::ROLES)->default(User::ROLE_user);
            $table->string('headline', 100)->nullable();
            $table->text('bio')->nullable();
            $table->timestamp('lastLoginIp')->nullable();
            $table->enum('isActive', User::ACTIVITY_STATUS)->default(User::NOT_ACTIVE)
                ->comment('بعد از فعال کردن ایمیل و یا تلفن همراه، فعالی میشود.');
            $table->rememberToken();
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
