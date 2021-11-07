<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('user_type')->comment('Student='.MEMBER_TYPE_STUDENT.', Lecturer='.MEMBER_TYPE_LECTURER.', Professor='.MEMBER_TYPE_PROFESSOR.', Librarian='.MEMBER_TYPE_LIBRARIAN.', Special='.MEMBER_TYPE_SPECIAL.', Others='.MEMBER_TYPE_OTHERS);
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('avatar_url')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamp('last_logged_at')->nullable();
            $table->string('password');
            $table->string('registration_number')->nullable();
            $table->string('roll_number')->nullable();
            $table->string('academic_year')->nullable();
            $table->string('department_name')->nullable();
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
        Schema::dropIfExists('members');
    }
}
