<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',30);
            $table->string('fathers_name',30);
            $table->string('gender',20);
            $table->date('dob');
            $table->string('email',40)->unique();
            $table->string('marital_status',20);
            $table->string('state',20);
            $table->string('district',20);
            $table->string('address',40);
            $table->string('religion',40);
            $table->string('category',40);
            $table->float('income');
            $table->string('qualification',40);
            $table->string('occupation',40);
            $table->integer('pan_no');
            $table->integer('citizenship_no');
            $table->string('senior_citizen',20);
            $table->string('existion_account',254);
            $table->string('account_type',40);
            $table->string('service_required',252);
            $table->string('card_no',20);
            $table->string('pin_no',4);
            $table->integer('balance');
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
