<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName',150);
            $table->string('lastName',150);
            $table->string('birthdate',15);
            $table->string('phonNO',50);
            $table->string('email',180)->nullable()->unique();

            $table->string('gardiansFirstName',150)->nullable();
            $table->string('gardiansLastName',150)->nullable();
            $table->string('gardiansNID',50)->nullable()->unique();
            $table->string('gardiansPhonNO',50)->nullable();
            $table->string('gardiansEmail',250)->nullable();
            $table->text('permanentAdress')->nullable();
            $table->text('presentAdress')->nullable();
            
            $table->string('avator')->default('null.jpg');
            $table->string('indexNO',20)->unique();
            $table->string('rollNO',20);
            $table->string('session_id',20);
            $table->string('group_id',3);
            $table->string('class_id',3);
            $table->string('section_id',3);
            $table->string('shift_id',3);
            $table->string('gender');
            $table->string('religion',15)->nullable();
            $table->text('coment')->nullable();
            $table->integer('active_status')->default(1);
            $table->string('creatorID');
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
        Schema::dropIfExists('students');
    }
}
