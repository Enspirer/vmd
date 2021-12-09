<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('access.table_names.users'), function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profile_type')->nullable()->comment('employee or candidate');
            $table->text('company_name')->nullable();
            $table->text('postion_vacant')->nullable();
            $table->text('comments')->nullable();
            $table->text('contact_number')->nullable();
            $table->text('education_qulification')->nullable();
            $table->text('cv')->nullable();
            $table->string('email')->unique();
            $table->string('avatar_type')->default('gravatar');
            $table->string('avatar_location')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('password_changed_at')->nullable();
            $table->tinyInteger('active')->default(1)->unsigned();
            $table->string('confirmation_code')->nullable();
            $table->boolean('confirmed')->default(config('access.users.confirm_email') ? false : true);
            $table->string('timezone')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('access.table_names.users'));
    }
}
